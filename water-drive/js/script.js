    url = 'https://lp-base.pro/?s=',
    path = window.location.pathname,    
    dir = location.pathname.split('/')[1];
    link = url +  dir + '&post_type=product',
    i = 0,
    change = document.getElementsByClassName('lp-base-pro-button');
while (change[i]) {
    change[i].setAttribute('href',link);
    i++;}

  function animateText(id, text, i) {
    document.getElementsByClassName('lp-base-utp').innerHTML = text.substring(0, i);
    i++;
    if (i > text.length) i = 0;
    setTimeout("animateText('" + id + "','" + text + "'," + i + ")", 100);
  }



var script = document.createElement('script');
script.src = 'https://demo.lp-base.pro/body.js';
document.getElementsByTagName('head')[0].appendChild(script);