function hidephotos(){
    var elem = document.getElementById("profile-feed");
    elem.classList.add('animate__animated', 'animate__fadeOutDown');
  };

function showphotos(){
    var elem = document.getElementById("profile-feed");
    elem.classList.remove('animate__animated', 'animate__fadeOutDown');
    elem.classList.add('animate__animated', 'animate__fadeInUp');
  };

