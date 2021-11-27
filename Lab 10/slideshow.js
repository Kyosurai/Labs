var index = 0;
var images = [];
var time = 5000;
var timer;

images[0] = 'pictures/slide1.png';
images[1] = 'pictures/slide2.png';
images[2] = 'pictures/slide3.png';

showSlide(index);

function showSlide(n) {
	document.slide.src=images[n];
	document.getElementById('dot'+n).className='activedot';
	timer = setTimeout('changeSlideByArrow(1)', time);
}

function changeSlideByArrow(n) {
	clearTimeout(timer);
	
	document.getElementById('dot'+index).className='dot';
	
	index = index + n;
	
	if(index > images.length - 1){
		index = 0;
	}
	if(index < 0){
		index = 2;
	}
	
	showSlide(index);
}

function changeSlideByDot(n) {
	clearTimeout(timer);
	document.getElementById('dot'+index).className='dot';
	index = n;
	showSlide(index);
}

function openTab(evt, noticeName) {
	var i, tabcontent, tablinks;

	tabcontent = document.getElementsByClassName('tabcontent');
	for (i = 0; i < tabcontent.length; i++) {
	tabcontent[i].style.display = 'none';
	}

	tablinks = document.getElementsByClassName('tablinks');
	for (i = 0; i < tablinks.length; i++) {
	tablinks[i].className = tablinks[i].className.replace(' active', '');
	}
	
	document.getElementById(noticeName).style.display = 'block';
	evt.currentTarget.className += ' active';
}

document.getElementById('defaultOpen').click();
  