    var flashvars = {
      mp3: "m/3Bass/3Bass - Evolution.mp3",
      javascript: "on"
    };
    
    var params = {
      wmode: "transparent"
    };
    
    var attributes = {
      id: "dewplayer"
    };
    
    swfobject.embedSWF("dewplayer.swf", "dewplayer-js", "200", "20", "9.0.0", false, flashvars, params, attributes);
    
    function getObj(objID){
        if (document.getElementById) {
            return document.getElementById(objID);
        } else if (document.all) {
            return document.all[objID];
        } else if (document.layers) {
            return document.layers[objID];
        }
    }

    function play() {
      var dewp = getObj("dewplayer");
      if(dewp) dewp.dewplay();
    }
    function stop() {
      var dewp = getObj("dewplayer");
      if(dewp) dewp.dewstop();
    }
    function pause() {
      var dewp = getObj("dewplayer");
      if(dewp) dewp.dewpause();
    }
    function next() {
      var dewp = getObj("dewplayer");
      if(dewp) dewp.dewnext();
    }
    function prev() {
      var dewp = getObj("dewplayer");
      if(dewp) dewp.dewprev();
    }
    function set(file) {
      var dewp = getObj("dewplayer");
      if(dewp) {
        dewp.dewset(file);
      }
    }
    function go(index) {
      var dewp = getObj("dewplayer");
      if(dewp) {
        dewp.dewgo(index);
      }
    }
    function setpos(ms) {
      var dewp = getObj("dewplayer");
      if(dewp) {
        dewp.dewsetpos(ms);
      }
    }
    function getpos() {
      var dewp = getObj("dewplayer");
      if(dewp) {
        alert(dewp.dewgetpos());
      }
    }
    function volume(val) {
      var dewp = getObj("dewplayer");
      if(dewp) {
        alert(dewp.dewvolume(val));
      }
    }
