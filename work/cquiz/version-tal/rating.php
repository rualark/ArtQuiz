<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("level");
  secure_variable("sort");
  secure_variable("c_id");

  if (!isset($level)) $level = $us[u_level];
  echo "<form action=rating.php method=get>";
  echo "Difficulty: ";
  //echo "<select name=level onChange='this.form.submit();'>";
  for ($i=1; $i<=$level_cust; $i++) {
    if ($i == $level) echo "<b><font style='BACKGROUND-COLOR: yellow'>";
    else echo "<a href=rating.php?level=$i>";
    if ($i == $us[u_level]) echo " <font color=red>";
    echo "".$level_name[$i]."</b></font></font></a> | ";
  }
  echo "Composer: ";
  $q = "SELECT *,count(*) as cnt FROM cc_qlog
    LEFT JOIN cc_composers USING (c_id)
    WHERE cc_qlog.u_level=$level
    GROUP BY cc_qlog.c_id
    ORDER BY cnt DESC
    ";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<input type=hidden name=level value=$level>";
  echo "<select name=c_id onChange='this.form.submit();'>";
  echo "<option value=0>*** All composers</option>";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<option value=$w[c_id]";
    if ($c_id == $w[c_id]) echo " selected";
    echo ">$w[c_name] ($w[cnt])</option>";
  }
  echo mysql_error();
  echo "</select>";
  echo "</form>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th>User</th>";
  echo "<th><a href='rating.php?c_id=$c_id&level=$level&sort=r_r1 desc'>Rating</th>";
  echo "<th><a href='rating.php?c_id=$c_id&level=$level&sort=r_total desc'>Answers</th>";
  echo "<th><a href='rating.php?c_id=$c_id&level=$level&sort=rght desc'>Correct</th>";
  echo "<th><a href='rating.php?c_id=$c_id&level=$level&sort=rghtp desc'>Correct period</th>";
  echo "<th><a href='rating.php?c_id=$c_id&level=$level&sort=r_avsec'>Think time</th>";
  echo "<th><a href='rating.php?c_id=$c_id&level=$level&sort=r_avcent2'>Abs. years error</th>";
  echo "<th><a href='rating.php?c_id=$c_id&level=$level&sort=u_last desc'>Last online</th>";
  //echo "<th><a href='rating.php?sort=cent desc'>Years error</th>";
  echo "</tr>";

  $order = "r_r1 desc";
  if (isset($sort)) $order = $sort;
  $cond = "";
  $q = "SELECT *,
    (r_right/r_total) as rght,
    (r_rightp/r_total) as rghtp,
    UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(u_last) as u_passed
    FROM cc_users
    LEFT JOIN cc_ur ON (cc_ur.u_id=cc_users.u_id AND cc_ur.r_level=$level)
    WHERE r_total>=$rating_min_total
    ORDER BY $order
    LIMIT $rating_max_count";
  if ($c_id>0) {
    $q = "SELECT *,
      avg(l_ok) as rght,
      avg(1-l_wrong2) as rghtp,
      avg(l_r1) as r_r1,
      avg(l_sec) as r_avsec,
      sum(abs(l_cent))/sum(l_ok) as r_avcent2,
      count(*) as r_total,
      UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(u_last) as u_passed
      FROM cc_qlog
      LEFT JOIN cc_users USING (u_id)
      WHERE cc_qlog.u_level=$level AND c_id=$c_id AND u_name != ''
      GROUP BY u_id
      HAVING r_total>=$rating_min_total2
      ORDER BY $order
      LIMIT $rating_max_count";
  }
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<tr>";
    echo "<td><center><a href=stats.php?su_id=$w[u_id]>";
    if ($w[t_id]>0) echo "<font color=brown>";
    echo "$w[u_name]</td>";
    echo "<td><center>".round($w[r_r1])."</td>";
    echo "<td><center>$w[r_total]</td>";
    echo "<td><center>".round($w[rght]*100, 1)."%</td>";
    echo "<td><center>".round($w[rghtp]*100, 1)."%</td>";
    echo "<td><center>".round($w[r_avsec], 2)."</td>";
    echo "<td><center>".round($w[r_avcent2], 1)."</td>";
    echo "<td><center>";
    if ($w[u_passed] < 60*60) echo "<b>";
    echo "$w[u_last]</td>";
    echo "</tr>";
  }
  echo "</table>";
  //echo "<br>Please pay attention, that I will hide users with less than 30 answers from rating table soon.";
  if ($c_id>0) echo "<br>Table includes only top $rating_max_count users with at least $rating_min_total2 answers.<br>";
  else echo "<br>Table includes only top $rating_max_count users with at least $rating_min_total answers.<br>";
  echo "Users currently answering a question are marked red. Active time less than an hour ago is bold.";
  
?>