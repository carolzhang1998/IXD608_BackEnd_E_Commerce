function Carousel(el) {
	let carousel = this;

	carousel.element = $(el);
	carousel.currentSlide = 0;
	carousel.previousSlide = 0;
	carousel.numberOfSlides = 0;

	carousel.timer = false;

	carousel.timerLength = 5000;

	carousel.timerPause = 10000;

	carousel.timing = false;

	carousel.changePosition = function(direction) {
		
		if(carousel.timing) return;
		
		carousel.previousSlide = carousel.currentSlide;

		if(direction === false) {
			carousel.currentSlide--;
		} else
		if(direction === true) {
			carousel.currentSlide++;
		} else {
			if(carousel.currentSlide < direction) {
				carousel.currentSlide = direction;
				return carousel.showPosition(true, true);
			} else if(carousel.currentSlide > direction) {
				carousel.currentSlide = direction;
				return carousel.showPosition(false, true);
			}
		}
		if(carousel.currentSlide == carousel.previousSlide) return;

		if(carousel.currentSlide < 0) {
			carousel.currentSlide = carousel.numberOfSlides-1;
		} else if(carousel.currentSlide >= carousel.numberOfSlides) {
			carousel.currentSlide = 0;
		} 
		carousel.showPosition(direction, false);
	}

	carousel.showPosition = function(direction, placed) {
		clearTimeout(carousel.changeTimer);
		carousel.changeTimer = false;

		let leftposition, rightposition;

		if(carousel.currentSlide == 0) {
			leftposition = carousel.numberOfSlides-1;
		} else leftposition = carousel.currentSlide-1;

		if(carousel.currentSlide == carousel.numberOfSlides-1) {
			rightposition = 0;
		} else rightposition = carousel.currentSlide+1;

		let cs = carousel.element.find(".carousel-slide").removeClass("atLeft atRight atCenter moving");

		cs.eq(carousel.previousSlide).addClass("atCenter")
		if(direction === true) {
			cs.eq(carousel.currentSlide).addClass("atRight");
			cs.eq(rightposition).addClass("atRight");
		} else if(direction === false) {
			cs.eq(carousel.currentSlide).addClass("atLeft");
			cs.eq(leftposition).addClass("atLeft");
		}
		carousel.timing = true;

		carousel.changeTimer = setTimeout(function(){
			carousel.element.find(".carousel-paginate")
				.eq(carousel.currentSlide).addClass("active")
				.siblings().removeClass("active");
				cs.eq(carousel.currentSlide).removeClass("atLeft atRight")
					.addClass("moving atCenter");
				cs.eq(carousel.previousSlide)
					.removeClass("atLeft atRight atCenter").addClass("moving at"+
						(direction === true ? "Left":"Right"));

					setTimeout(function(){carousel.timing = false;},1000);
		},50);
	}

	carousel.startTimer = function() {
		if(carousel.timerLength === 0) return;
		carousel.timer = setInterval(carousel.tick, carousel.timerLength);
	}

	carousel.pauseTimer = function() {
		carousel.stopTimer();
		carousel.timer = setTimeout(carousel.startTimer, carousel.timerPause);
	}

	carousel.stopTimer = function () {
		clearInterval(carousel.timer);
		carousel.timer = false;
	}

	carousel.tick = function() {
		carousel.changePosition(true);
	}

	carousel.makeButtons = function() {
		let buttondiv = $("<div class='carousel-pagination'>");

		for(let i=0; i<carousel.numberOfSlides; i++) {
			btn = $("<button class='carousel-paginate'>").html("&#x25cf;");

			if(i == 0) btn.addClass("active");

			buttondiv.append(btn);
		}

		carousel.element.append(
			$("<div class='carousel-controls'>").html(
				"<div class='carousel-control carousel-control-left'>&lt;</div>"
					+ "<div class='carousel-control carousel-control-right'>&gt;</div>"
				).append(buttondiv)
			);
	};

	carousel.init = function() {
		if(carousel.element.data("timer")=="none") {
			carousel.timerLength = 0;
		} else if(carousel.element.data("timer")!=undefined) {
			carousel.timerLength = +carousel.element.data("timer")*1000;
		}

		carousel.timerPause = carousel.timerLength*2;

		carousel.numberOfSlides = carousel.element.find(".carousel-slide").length;

		carousel.element.find(".carousel-slide").eq(0).addClass("atCenter");

		carousel.makeButtons();

		carousel.startTimer();
	};

	carousel.element.on("click", ".carousel-control", function(){
		carousel.changePosition($(this).is(".carousel-control-right"));
		carousel.pauseTimer();
	});

	carousel.element.on("click", ".carousel-paginate", function(){
		carousel.changePosition($(this).index());
		carousel.pauseTimer();
	});

	carousel.init();

}

$(function(){
	$(".carousel").each(function(){
		new Carousel(this);
	});
})




$(".complicated dt").on("click",function(){
	let id = $(this).index(".complicated dt");

	let nextSibling = $(".complicated dd").eq(id);

	if(nextSibling.is(":visible")){
		nextSibling.slideUp();
	}else {
		nextSibling.slideDown()
		.siblings("dd").slideUp();
	}
 })

$(".option dt").on("click",function(){
	let id = $(this).index(".option dt");

	let nextSibling = $(".option dd").eq(id);

	if(nextSibling.is(":visible")){
		nextSibling.slideUp();
	}else {
		nextSibling.slideDown()
		.siblings("dd").slideUp();
	}
 })







const openLightBox = function(event) {
	$(".lightbox-content").html("<img src='"+ event.target.src +"'>");

	$(".lightbox").addClass("active");
}

$(function(){
	$("body").on("click",".gallery img", openLightBox);

	$(".lightbox-back").on("click",function(){
		$(".lightbox").removeClass("active");
	});
})













function isTouch(e) {
	return e.type.substring(0,5) == "touch";
}

function ev(e) {
	if (isTouch(e)) {
		if (!e.originalEvent.touches.length) return e.originalEvent.changedTouches;
		else return e.originalEvent.touches;
	}else {
		return [e];
	}
}

function getEXY(e,o) {
	let offs = $(o||e.target).offset();
	x = e.pageX - offs.left;
	y = e.pageY - offs.top;
	return {x,y};
}

function getEventXY(e,o) {
	return getEXY(ev(e)[0],o);
}

let clamp = (a,min,max) => a>max?max:a<min?min:a;

$(".original-image").on("mousemove touchmove",function(e){
	let pos = getEventXY(e,this);

	let zoompos = {
		x:clamp(pos.x-(100*0.5),0,600),
		y:clamp(pos.y-(100*0.5),0,400)
	}

	$(".zoomer").css({
		transform:`translate(${zoompos.x}px,${zoompos.y}px)`
	})
	$(".zoomed-image").css({
		"background-position":`${-zoompos.x*2.2}px ${-zoompos.y*2.5}px`
	})
})






