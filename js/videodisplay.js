var video = document.getElementsByTagName('video')[0],
    play = document.getElementsByClassName('video__play')[0],
    timeline = document.getElementsByClassName('timeline')[0],
    timelineProgress = document.getElementsByClassName('timeline__progress')[0],
    drag = document.getElementsByClassName('timeline__drag')[0];

// Toggle Play / Pause
play.addEventListener('click', togglePlay, false);

function togglePlay() {
  if (video.paused) {
    video.play();
  } else {
    video.pause();
  }
}

// on interaction with video controls
video.onplay = function() {
  TweenMax.ticker.addEventListener('tick', vidUpdate);
};
video.onpause = function() {
	TweenMax.ticker.removeEventListener('tick', vidUpdate);
};
video.onended = function() {
	TweenMax.ticker.removeEventListener('tick', vidUpdate);
};

// Sync the timeline with the video duration
function vidUpdate() {
  TweenMax.set(timelineProgress, {
    scaleX: (video.currentTime / video.duration).toFixed(5)
  });
  TweenMax.set(drag, {
    x: (video.currentTime / video.duration * timeline.offsetWidth).toFixed(4)
  });
}

// Make the timeline draggable
Draggable.create(drag, {
  type: 'x',
  trigger: timeline,
  bounds: timeline,
  onPress: function(e) {
    video.currentTime = this.x / this.maxX * video.duration;
    TweenMax.set(this.target, {
      x: this.pointerX - timeline.getBoundingClientRect().left
    });
    this.update();
    var progress = this.x / timeline.offsetWidth;
    TweenMax.set(timelineProgress, {
      scaleX: progress
    });
  },
  onDrag: function() {
    video.currentTime = this.x / this.maxX * video.duration;
    var progress = this.x / timeline.offsetWidth;
    TweenMax.set(timelineProgress, {
      scaleX: progress
    });
  },
  onRelease: function(e) {
    e.preventDefault();
  }
});