    //side navigation menu
    function openNav() {
        document.getElementById("mySidenav").style.width = "470px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
$(document).ready( function() {

     $(document).on('change', '#uploadBtnOne :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('#uploadBtnOne :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURLOne(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload-one').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpOne").change(function(){
        readURLOne(this);
    });   

    $(document).on('change', '#uploadBtnTwo :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('#uploadBtnTwo :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURLTwo(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload-two').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpTwo").change(function(){
        readURLTwo(this);
    });   

    $(document).on('change', '#uploadBtnThree :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('#uploadBtnThree :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURLThree(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload-three').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpThree").change(function(){
        readURLThree(this);
    });   


    $(document).on('change', '#uploadBtnFour :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('#uploadBtnFour :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURLFour(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload-four').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpFour").change(function(){
        readURLFour(this);
    });   


$(document).on('change', '#uploadBtnFive :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('#uploadBtnFive :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURLFive(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload-five').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpFive").change(function(){
        readURLFive(this);
    });   



  
  });

    //-----------------------------------alerts------------------------------------------

var Alert = undefined;

(function(Alert) {
  var alert, error, info, success, warning, _container;
  info = function(message, title, options) {
    return alert("info", message, title, "icon-info-sign", options);
  };
  warning = function(message, title, options) {
    return alert("warning", message, title, "icon-warning-sign", options);
  };
  error = function(message, title, options) {
    return alert("error", message, title, "icon-minus-sign", options);
  };
  success = function(message, title, options) {
    return alert("success", message, title, "icon-ok-sign", options);
  };
  alert = function(type, message, title, icon, options) {
    var alertElem, messageElem, titleElem, iconElem, innerElem, _container;
    if (typeof options === "undefined") {
      options = {};
    }
    options = $.extend({}, Alert.defaults, options);
    if (!_container) {
      _container = $("#alerts");
      if (_container.length === 0) {
        _container = $("<ul>").attr("id", "alerts").appendTo($("body"));
      }
    }
    if (options.width) {
      _container.css({
        width: options.width
      });
    }
      alertElem = $("<li>").addClass("alert").addClass("alert-" + type);
      setTimeout(function() {
         alertElem.addClass('open');
      }, 1);
    if (icon) {
      iconElem = $("<i>").addClass(icon);
      alertElem.append(iconElem);
    }
    innerElem = $("<div>").addClass("alert-block");
    alertElem.append(innerElem);
    if (title) {
      titleElem = $("<div>").addClass("alert-title").append(title);
      innerElem.append(titleElem);
    }
    if (message) {
      messageElem = $("<div>").addClass("alert-message").append(message);
      innerElem.append(messageElem);
    }
    if (options.displayDuration > 0) {
      setTimeout((function() {
        leave();
      }), options.displayDuration);
    } else {
      innerElem.append("<em>Click to Dismiss</em>");
    }
    alertElem.on("click", function() {
      leave();
    });
     function leave() {
         alertElem.removeClass('open');
          alertElem.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',  function() { return alertElem.remove(); });
    }
    return _container.prepend(alertElem);
  };
  Alert.defaults = {
    width: "",
    icon: "",
    displayDuration: 3000,
    pos: ""
  };
  Alert.info = info;
  Alert.warning = warning;
  Alert.error = error;
  Alert.success = success;
  return _container = void 0;
    
   
})(Alert || (Alert = {}));

this.Alert = Alert;

$('#test').on('click', function() {
  Alert.info('Message');
  });




