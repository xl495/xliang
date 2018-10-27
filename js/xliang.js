// #侧边栏切换#
$(document).ready(function () {
    var inst = new mdui.Drawer('#sidebar');
    $("#sidebaropen").click(function () {
        inst.toggle();
    });
    $(".sidebar-hide").click(function () {
        inst.close();
    })
});
// # fancybox 本人太笨,只会这么写-- #
$(function (){
  var i0 =$('.post-content p img:eq(0)').attr('src'),
      i1 =$('.post-content p img:eq(1)').attr('src'),
      i2 =$('.post-content p img:eq(2)').attr('src'),
      i3 =$('.post-content p img:eq(3)').attr('src'),
      i4 =$('.post-content p img:eq(4)').attr('src'),
      i5 =$('.post-content p img:eq(5)').attr('src'),
      i6 =$('.post-content p img:eq(6)').attr('src'),
      i7 =$('.post-content p img:eq(7)').attr('src'),
      i8 =$('.post-content p img:eq(8)').attr('src'),
      i9 =$('.post-content p img:eq(9)').attr('src');
    $('.post-content p img:eq(0)').wrap("<a data-fancybox='gallery' href='"+i0+"'</a>");
    $('.post-content p img:eq(1)').wrap("<a data-fancybox='gallery' href='"+i1+"'</a>");
    $('.post-content p img:eq(2)').wrap("<a data-fancybox='gallery' href='"+i2+"'</a>");
    $('.post-content p img:eq(3)').wrap("<a data-fancybox='gallery' href='"+i3+"'</a>");
    $('.post-content p img:eq(4)').wrap("<a data-fancybox='gallery' href='"+i4+"'</a>");
    $('.post-content p img:eq(5)').wrap("<a data-fancybox='gallery' href='"+i5+"'</a>");
    $('.post-content p img:eq(6)').wrap("<a data-fancybox='gallery' href='"+i6+"'</a>");
    $('.post-content p img:eq(7)').wrap("<a data-fancybox='gallery' href='"+i7+"'</a>");
    $('.post-content p img:eq(8)').wrap("<a data-fancybox='gallery' href='"+i8+"'</a>");
    $('.post-content p img:eq(9)').wrap("<a data-fancybox='gallery' href='"+i9+"'</a>");
});
$(document).ready(function() {
  /* 最基本的，使用了默认配置 */   
  $("a#single_image").fancybox();    
  /* 使用了自定义配置 */    
  $("a#inline").fancybox({
      'hideOnContentClick': true
  });
  /* 一下配置支持组播放 */  
  $("a.group").fancybox({
      'transitionIn'  :   'elastic',
      'transitionOut' :   'elastic',
      'speedIn'       :   600, 
      'speedOut'      :   200, 
      'overlayShow'   :   false
  });    
});
// #向页面文章下的img元素套上一个 <a></a> 标签
$(function() {
  $("#content .cloud-zoom").fancybox({
    'transitionIn'	:	'elastic',
    'transitionOut'	:	'none',
    'speedIn'		:	600,
    'speedOut'		:	200,
    'overlayShow'	:	true,
    'overlayColor'	:	'#000',
    'cyclic'		:	true,
    'easingIn'		:	'easeInOutExpo'
  });

});
// #particlesJS# 
particlesJS('particles-js',
  
  {
  "particles": {
    "number": {
      "value": 50,
      "density": {
        "enable": false,
        "value_area": 200
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#eee"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "url('https://cn.bing.com/az/hprichbg/rb/HubbleSaturn_ZH-CN12020278371_1920x1080.jpg')",
        "width": 1,
        "height": 1
      }
    },
    "opacity": {
      "value": 1,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 0.75,
        "opacity_min": 0,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 1,
        "size_min": 0,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 100,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 1,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 0,
        "rotateY": 0
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "bubble"
      },
      "onclick": {
        "enable": false,
        "mode": "repulse"
      },
      "resize": false
    },
    "modes": {
      "grab": {
        "distance": 300,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 250,
        "size": 0,
        "duration": 2,
        "opacity": 0,
        "speed": 3
      },
      "repulse": {
        "distance": 100,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}

);