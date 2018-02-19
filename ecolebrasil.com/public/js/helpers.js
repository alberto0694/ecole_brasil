function readFile() {
  var targetImg = this.parentElement.getElementsByClassName("img_result")[0];
  var targetb64 = this.parentElement.getElementsByClassName("b64_result")[0];

  if (this.files && this.files[0]) {

    var FR= new FileReader();

    FR.addEventListener("load", function(e) {
	    targetImg.src       = e.target.result;
	   	targetb64.value = e.target.result;
    });

    FR.readAsDataURL( this.files[0] );
  }

}

function validateEmail(email) {
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return (true);
  }
  return (false);
}

function getIdYoutube(url)
{
    // var url = "...";
    if(url.indexOf("embed") > -1)
        return url;


    var videoid = url.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);
    if(videoid != null) {
       return 'https://www.youtube.com/embed/' + videoid[1];
    } else {
        return "0";
    }
}

function getIdVimeo(url)
{

    if(url.indexOf("player") > -1)
        return url;

    var regExp = /https:\/\/(www\.)?vimeo.com\/(\d+)($|\/)/;
    var match = url.match(regExp);

    if (match){
        return "https://player.vimeo.com/video/" + match[2];
    }
    else{
        return "0";
    }
}

function isBase64(str) {
    try {
        return btoa(atob(str)) == str;
    } catch (err) {
        return false;
    }
}

function validateFields(arr){
  let result = {status: true, element:null};
  arr.forEach(function(item, index){
    switch(item.type) {
        case 'text':
            if(item.element.val() === ''){
              result.status = false;
              result.element = item.element;
              result.element.parent().parent().addClass('has-errors');
            }else{
              item.element.parent().parent().removeClass('has-errors');
            }
            break;
        case 'textarea':
            if(item.element.val() === ''){
              result.status = false;
              result.element = item.element;
              result.element.parent().parent().addClass('has-errors-textarea');
            }else{
              item.element.parent().parent().removeClass('has-errors-textarea');
            }
            break;
        case 'email':
            if(!validateEmail(item.element.val())){
              result.status = false;
              result.element = item.element;
              result.element.parent().parent().addClass('has-errors');
            }else{
              item.element.parent().parent().removeClass('has-errors');
            }
            break;
        case 'file':
            if(item.element[0].defaultValue.indexOf('data:') != 0){
              result.status = false;
              result.element = item.element;
              result.element.parent().parent().addClass('has-errors');
            }else{
              item.element.parent().parent().removeClass('has-errors');
            }
            break;
        case 'select':
            if(item.element[0].length == 0){
              result.status = false;
              result.element = item.element;
              result.element.parent().parent().addClass('has-errors');
            }else{
              item.element.parent().parent().removeClass('has-errors');
            }
            break;
    }
  });

  if(result.element){
    result.element.parent().parent().addClass('has-errors');
  }
  if(!result.status){
    $(document).scrollTop( 0 );
  }
  return result;
}


function getUrlFixed(url_param){
  var url = getIdYoutube( url_param );
  if(url == "0"){
      url = getIdVimeo( url_param );
  }
  return url;
}

function normalizeVideo(element)
{

      var urlVideo = $(element).val();
      var url = getUrlFixed( urlVideo );
      $(element).val( url );
}

function showContent()
{

    $("#admin-application-only").show();
    $("#loading-admin-application-only").hide();

    //console.log(getIdYoutube( 'https://www.youtube.com/watch?v=zmpoCyH8tv8' ));
}
