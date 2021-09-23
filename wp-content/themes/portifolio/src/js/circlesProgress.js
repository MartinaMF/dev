import "jquery-circles-progressbar";

export const circlesProgress = function (entries, observer){

        const optionsObject_a = {
          'size': 150, // 150px width and height
          'progress': 70, // fillup in percent
          'innerColor': '#f7f7f7',
          'outerColor': '#28b485',
          'initialProgress' : 0,
          'borderSize': 15 // width of the border
        }
        const optionsObject_b = {
          'size':150, // 150px width and height
          'progress': 70, // fillup in percent
          'innerColor': '#f7f7f7',
          'outerColor': '#28b485',
          'initialProgress' : 0,
          'borderSize': 15 // width of the border
        }
        const optionsObject_c = {
          'size':150, // 150px width and height
          'progress': 70, // fillup in percent
          'innerColor': '#f7f7f7',
          'outerColor': '#28b485',
          'initialProgress' : 0,
          'borderSize': 15 // width of the border
        }
        const optionsObject_d = {
          'size':150, // 150px width and height
          'progress': 70, // fillup in percent
          'innerColor': '#f7f7f7',
          'outerColor': '#28b485',
          'initialProgress' : 0,
          'borderSize': 15 // width of the border
        }
        $('#circle-a').circlesProgress(optionsObject_a);
        $('#circle-b').circlesProgress(optionsObject_b);
        $('#circle-c').circlesProgress(optionsObject_c);
        $('#circle-d').circlesProgress(optionsObject_d);
  }