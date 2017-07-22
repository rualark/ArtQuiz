<?
  include "../mysql.php";
  
  function mysql_query2($q) {
    echo "$q<br>";
    mysql_query($q);
    echo mysql_error();
  }
  
  function add_map_cols_authors($table, $id, $id2='') {
    mysql_query2("ALTER TABLE $table ADD map{$id}_name varchar(255) NOT NULL COMMENT 'Name to display on map'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_pos  int(11) NOT NULL COMMENT 'Position x'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_year int(11) NOT NULL COMMENT 'Manual year shift'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_ayear int(11) NOT NULL COMMENT 'Algorithmic year shift'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_right tinyint(4) NOT NULL COMMENT '0=align map name left, 1=right'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_comment varchar(255) NOT NULL COMMENT 'Comment to show on map'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_img varchar(255) NOT NULL COMMENT 'Image to show near map name'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_shape tinyint(4) NOT NULL COMMENT '0=round, 1=rect, 2=star'");
    if ($id2 != '-')
    mysql_query2("UPDATE $table SET map{$id}_name=map{$id2}_name, map{$id}_pos=map{$id2}_pos, 
      map{$id}_year=map{$id2}_year, map{$id}_right=map{$id2}_right, map{$id}_comment=map{$id2}_comment, 
      map{$id}_img=map{$id2}_img, map{$id}_ayear=map{$id2}_ayear, map{$id}_shape=map{$id2}_shape");
  }
  
  function add_map_cols_tdesc($table, $id, $id2='') {
    mysql_query2("ALTER TABLE $table ADD map{$id}_name varchar(255) NOT NULL COMMENT 'Name to display on map'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_x1  int(11) NOT NULL COMMENT 'Position x1'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_x2  int(11) NOT NULL COMMENT 'Position x2'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_y1  int(11) NOT NULL COMMENT 'Position y1'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_y2  int(11) NOT NULL COMMENT 'Position y2'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_color varchar(255) NOT NULL COMMENT 'Bg color'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_label int(11) NOT NULL COMMENT '0=invisible, 1=left up, 2=right up, 3=left down, 4=right down, 100-199=left middle, 200-299=right middle'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_active tinyint(4) NOT NULL COMMENT '0=active left, 1=active right'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_img varchar(255) NOT NULL COMMENT 'Image to show near map name'");
    mysql_query2("ALTER TABLE $table ADD map{$id}_poly varbinary(1000) NOT NULL COMMENT 'Poly coordinates'");
    mysql_query2("UPDATE $table SET map{$id}_x1=map{$id2}_x1, map{$id}_x2=map{$id2}_x2, map{$id}_y1=map{$id2}_y1, 
      map{$id}_y2=map{$id2}_y2, map{$id}_poly=map{$id2}_poly, map{$id}_color=map{$id2}_color, 
      map{$id}_label=map{$id2}_label, map{$id}_active=map{$id2}_active, map{$id}_img=map_img, 
      map{$id}_name=map_name");
  }
  
  //add_map_cols_authors('rl_authors', '3', '');
  //add_map_cols_tdesc('rl_tdesc', '3', '');

  add_map_cols_authors('rl_authors', '9', '-');
  add_map_cols_authors('ep_authors', '9', '-');
  add_map_cols_authors('aq_artists', '9', '-');
  add_map_cols_authors('cc_composers', '9', '-');
  
?>
