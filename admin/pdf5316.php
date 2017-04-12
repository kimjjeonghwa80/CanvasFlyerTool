<?php
	require_once ('tcpdf/tcpdf.php');
	//$jsonData = '[{"objects":[{"type":"i-text","originX":"left","originY":"top","left":149.53,"top":221.4,"width":129.95,"height":31.2,"fill":"#00ff00","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ff00ff","backgroundImage":{"type":"image","originX":"left","originY":"top","left":0,"top":0,"width":750,"height":600,"fill":"rgb(0,0,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","src":"http://design.youprintem.com/admin/uploads/flowers.jpg","filters":[],"crossOrigin":""}}]';
	//$jsonData = '[{"objects":[{"type":"i-text","originX":"left","originY":"top","left":271.03,"top":203.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ff00ff"}]';
	//$jsonData = '[{"objects":[{"type":"i-text","originX":"left","originY":"top","left":79.03,"top":128.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"path-group","originX":"left","originY":"top","left":94,"top":94,"width":100,"height":100,"fill":"","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":"newsvgs/15299.svg","clipTo":null,"backgroundColor":"","paths":[{"type":"rect","originX":"left","originY":"top","left":17,"top":1031.4,"width":3,"height":6,"fill":"rgb(192,57,43)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","rx":0,"ry":0},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(189,195,199)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,3.031],["L",3,12],["L",3,21],["L",21,21],["L",21,19.188],["L",21,13.812],["L",21,12],["L",12,3.031],["L",12,3.031],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,10.554666666666662]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(149,165,166)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,1032],["L",3,1040.9],["L",3,1042.9],["L",12,1033.9],["L",21,1042.9],["L",21,1042.8],["L",21,1040.9],["L",12,1032],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,-3741.366666666667]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(231,76,60)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,1029.4],["L",0.686,1040.7],["L",2.101,1042.1],["L",12,1032.2],["L",21.899,1042.1],["L",23.314,1040.7],["L",12,1029.4],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,-3741.366666666667]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(52,152,219)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",14,9],["C",14,10.097,13.097,11,12,11],["C",10.903,11,10,10.097,10,9],["C",10,7.903,10.903,7,12,7],["C",13.097,7,14,7.903,14,9],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,14.193353333333562]},{"type":"rect","originX":"left","originY":"top","left":10,"top":1043.4,"width":4,"height":6,"fill":"rgb(230,126,34)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","rx":0,"ry":0},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(211,84,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,17.5],["C",12,17.774,11.774,18,11.5,18],["C",11.226,18,11,17.774,11,17.5],["C",11,17.226,11.226,17,11.5,17],["C",11.774,17,12,17.226,12,17.5],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,12.846116666666665,14.193353333333562]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(41,128,185)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,1036.4],["C",10.895,1036.4,10,1037.3,10,1038.4],["C",10,1038.5,10.021,1038.7,10.062,1038.9],["C",10.284,1038,11.068,1037.4,12,1037.4],["C",12.932,1037.4,13.716,1038,13.938,1038.9],["C",13.979,1038.7,14,1038.5,14,1038.4],["C",14,1037.3,13.105,1036.4,12,1036.4],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,-3741.366666666667]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(241,196,15)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,17.5],["C",12,17.774,11.774,18,11.5,18],["C",11.226,18,11,17.774,11,17.5],["C",11,17.226,11.226,17,11.5,17],["C",11.774,17,12,17.226,12,17.5],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,12.846116666666665,12.369203333333644]},{"type":"rect","originX":"left","originY":"top","left":10,"top":1042.4,"width":4,"height":1,"fill":"rgb(211,84,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","rx":0,"ry":0}]}],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":79.03,"top":128.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":79.03,"top":128.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":79.03,"top":128.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":-59.05,"top":37.58,"width":406.09,"height":97.5,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":75,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"}]';
	//$jsonData = '[{"objects":[{"type":"i-text","originX":"left","originY":"top","left":79.03,"top":128.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":0.51,"top":45.9,"width":286.97,"height":68.9,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":53,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"}]';
	//$jsonData = '[{"objects":[{"type":"i-text","originX":"left","originY":"top","left":136.03,"top":66.9,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":98.53,"top":167.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":28.03,"top":179.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":92.53,"top":198.9,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"}]';
	//$jsonData = '[{"objects":[{"type":"i-text","originX":"left","originY":"top","left":79.03,"top":128.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"path-group","originX":"left","originY":"top","left":-6,"top":-6,"width":300,"height":300,"fill":"","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":"newsvgs/8532.svg","clipTo":null,"backgroundColor":"","paths":[{"type":"path","originX":"left","originY":"top","left":150,"top":150,"width":300,"height":300,"fill":"#000000","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",150,0],["C",67.199,0,0,67.199,0,150],["c",0,82.8,67.199,150,150,150],["c",82.799,0,150,-67.2,150,-150],["C",300,67.199,232.799,0,150,0],["z"]],"pathOffset":{"x":0,"y":0}},{"type":"path","originX":"left","originY":"top","left":150,"top":150,"width":300,"height":300,"fill":"#FFFFFF","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",118.799,110.4],["l",-6,9.6],["l",-16.801,-10.799],["L",79.199,120],["l",-7.201,-9.6],["l",12,-8.4],["l",-12,-8.399],["L",79.199,84],["l",16.799,10.801],["L",112.799,84],["l",7.199,9.601],["l",-12,8.399],["L",118.799,110.4],["z"],["M",150,240],["c",-16.801,0,-30,-13.2,-30,-30],["c",0,-16.801,13.199,-30,30,-30],["c",16.799,0,30,13.199,30,30],["C",180,226.8,166.799,240,150,240],["z"],["M",226.799,110.4],["l",-6,9.6],["l",-16.801,-10.799],["L",187.199,120],["L",180,110.4],["l",12,-8.4],["l",-12,-8.399],["L",187.199,84],["l",16.799,10.801],["L",220.799,84],["L",228,93.601],["L",216,102],["L",226.799,110.4],["z"]],"pathOffset":{"x":0,"y":0}}]}],"background":"#ffffff"}]';
	//$jsonData = '[{"objects":[{"type":"i-text","originX":"left","originY":"top","left":31.03,"top":80.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":31.03,"top":80.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":31.03,"top":80.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":31.03,"top":80.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":31.03,"top":80.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":31.03,"top":80.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"}]';
	//$jsonData = '[{"objects":[{"type":"i-text","originX":"left","originY":"top","left":79.03,"top":128.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}},{"type":"i-text","originX":"left","originY":"top","left":79.03,"top":165.9,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":79.03,"top":112.64,"width":194.92,"height":46.8,"fill":"#ffff00","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":36,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}},{"type":"i-text","originX":"left","originY":"top","left":79.03,"top":179.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"i-text","originX":"left","originY":"top","left":79.03,"top":128.4,"width":129.95,"height":31.2,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.3,"textDecoration":"","textAlign":"left","path":null,"textBackgroundColor":"","useNative":true,"styles":{}}],"background":"#ffffff"},{"objects":[{"type":"path-group","originX":"left","originY":"top","left":-6,"top":-6,"width":300,"height":300,"fill":"","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":"newsvgs/22536.svg","clipTo":null,"backgroundColor":"","paths":[{"type":"path","originX":"left","originY":"top","left":150,"top":150,"width":300,"height":300,"fill":"#000000","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",150,0],["C",67.199,0,0,67.199,0,150],["c",0,82.8,67.199,150,150,150],["c",82.799,0,150,-67.2,150,-150],["C",300,67.199,232.799,0,150,0],["z"]],"pathOffset":{"x":0,"y":0}},{"type":"path","originX":"left","originY":"top","left":150,"top":150,"width":300,"height":300,"fill":"#FFFFFF","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",118.799,110.4],["l",-6,9.6],["l",-16.801,-10.799],["L",79.199,120],["l",-7.201,-9.6],["l",12,-8.4],["l",-12,-8.399],["L",79.199,84],["l",16.799,10.801],["L",112.799,84],["l",7.199,9.601],["l",-12,8.399],["L",118.799,110.4],["z"],["M",150,240],["c",-16.801,0,-30,-13.2,-30,-30],["c",0,-16.801,13.199,-30,30,-30],["c",16.799,0,30,13.199,30,30],["C",180,226.8,166.799,240,150,240],["z"],["M",226.799,110.4],["l",-6,9.6],["l",-16.801,-10.799],["L",187.199,120],["L",180,110.4],["l",12,-8.4],["l",-12,-8.399],["L",187.199,84],["l",16.799,10.801],["L",220.799,84],["L",228,93.601],["L",216,102],["L",226.799,110.4],["z"]],"pathOffset":{"x":0,"y":0}}]}],"background":"#ffffff"},{"objects":[{"type":"path-group","originX":"left","originY":"top","left":94,"top":94,"width":100,"height":100,"fill":"","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":"newsvgs/34430.svg","clipTo":null,"backgroundColor":"","paths":[{"type":"rect","originX":"left","originY":"top","left":17,"top":1031.4,"width":3,"height":6,"fill":"rgb(192,57,43)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","rx":0,"ry":0},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(189,195,199)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,3.031],["L",3,12],["L",3,21],["L",21,21],["L",21,19.188],["L",21,13.812],["L",21,12],["L",12,3.031],["L",12,3.031],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,10.554666666666662]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(149,165,166)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,1032],["L",3,1040.9],["L",3,1042.9],["L",12,1033.9],["L",21,1042.9],["L",21,1042.8],["L",21,1040.9],["L",12,1032],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,-3741.366666666667]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(231,76,60)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,1029.4],["L",0.686,1040.7],["L",2.101,1042.1],["L",12,1032.2],["L",21.899,1042.1],["L",23.314,1040.7],["L",12,1029.4],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,-3741.366666666667]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(52,152,219)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",14,9],["C",14,10.097,13.097,11,12,11],["C",10.903,11,10,10.097,10,9],["C",10,7.903,10.903,7,12,7],["C",13.097,7,14,7.903,14,9],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,14.193353333333562]},{"type":"rect","originX":"left","originY":"top","left":10,"top":1043.4,"width":4,"height":6,"fill":"rgb(230,126,34)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","rx":0,"ry":0},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(211,84,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,17.5],["C",12,17.774,11.774,18,11.5,18],["C",11.226,18,11,17.774,11,17.5],["C",11,17.226,11.226,17,11.5,17],["C",11.774,17,12,17.226,12,17.5],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,12.846116666666665,14.193353333333562]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(41,128,185)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,1036.4],["C",10.895,1036.4,10,1037.3,10,1038.4],["C",10,1038.5,10.021,1038.7,10.062,1038.9],["C",10.284,1038,11.068,1037.4,12,1037.4],["C",12.932,1037.4,13.716,1038,13.938,1038.9],["C",13.979,1038.7,14,1038.5,14,1038.4],["C",14,1037.3,13.105,1036.4,12,1036.4],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,-3741.366666666667]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"rgb(241,196,15)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,17.5],["C",12,17.774,11.774,18,11.5,18],["C",11.226,18,11,17.774,11,17.5],["C",11,17.226,11.226,17,11.5,17],["C",11.774,17,12,17.226,12,17.5],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,12.846116666666665,12.369203333333644]},{"type":"rect","originX":"left","originY":"top","left":10,"top":1042.4,"width":4,"height":1,"fill":"rgb(211,84,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","rx":0,"ry":0}]}],"background":"#ffffff"},{"objects":[{"type":"path-group","originX":"left","originY":"top","left":94,"top":61.33,"width":100,"height":100,"fill":"","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1.33,"scaleY":1.33,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":"newsvgs/50357.svg","clipTo":null,"backgroundColor":"","paths":[{"type":"rect","originX":"left","originY":"top","left":17,"top":1031.4,"width":3,"height":6,"fill":"#c0392b","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","rx":0,"ry":0},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"#bdc3c7","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,3.031],["L",3,12],["L",3,21],["L",21,21],["L",21,19.188],["L",21,13.812],["L",21,12],["L",12,3.031],["L",12,3.031],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,10.554666666666662]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"#95a5a6","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,1032],["L",3,1040.9],["L",3,1042.9],["L",12,1033.9],["L",21,1042.9],["L",21,1042.8],["L",21,1040.9],["L",12,1032],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,-3741.366666666667]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"#e74c3c","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,1029.4],["L",0.686,1040.7],["L",2.101,1042.1],["L",12,1032.2],["L",21.899,1042.1],["L",23.314,1040.7],["L",12,1029.4],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,-3741.366666666667]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"#3498db","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",14,9],["C",14,10.097,13.097,11,12,11],["C",10.903,11,10,10.097,10,9],["C",10,7.903,10.903,7,12,7],["C",13.097,7,14,7.903,14,9],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,14.193353333333562]},{"type":"rect","originX":"left","originY":"top","left":10,"top":1043.4,"width":4,"height":6,"fill":"#e67e22","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","rx":0,"ry":0},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"#d35400","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,17.5],["C",12,17.774,11.774,18,11.5,18],["C",11.226,18,11,17.774,11,17.5],["C",11,17.226,11.226,17,11.5,17],["C",11.774,17,12,17.226,12,17.5],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,12.846116666666665,14.193353333333562]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"#2980b9","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,1036.4],["C",10.895,1036.4,10,1037.3,10,1038.4],["C",10,1038.5,10.021,1038.7,10.062,1038.9],["C",10.284,1038,11.068,1037.4,12,1037.4],["C",12.932,1037.4,13.716,1038,13.938,1038.9],["C",13.979,1038.7,14,1038.5,14,1038.4],["C",14,1037.3,13.105,1036.4,12,1036.4],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,7.373666666666665,-3741.366666666667]},{"type":"path","originX":"left","originY":"top","left":50,"top":50,"width":100,"height":100,"fill":"#f1c40f","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","path":[["M",12,17.5],["C",12,17.774,11.774,18,11.5,18],["C",11.226,18,11,17.774,11,17.5],["C",11,17.226,11.226,17,11.5,17],["C",11.774,17,12,17.226,12,17.5],["Z"]],"pathOffset":{"x":0,"y":0},"transformMatrix":[3.6483,0,0,3.6483,12.846116666666665,12.369203333333644]},{"type":"rect","originX":"left","originY":"top","left":10,"top":1042.4,"width":4,"height":1,"fill":"#d35400","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"round","strokeMiterLimit":1.41,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","rx":0,"ry":0}]}],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[],"background":"#ffffff"},{"objects":[],"background":"#ffffff"}]';
	//$jsonData = '[{"objects":[{"type":"text","originX":"left","originY":"top","left":0,"top":0,"width":0,"height":20.97,"fill":"black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":0,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","fillRule":"nonzero","globalCompositeOperation":"source-over","transformMatrix":null,"text":"","fontSize":16,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.16,"textDecoration":"","textAlign":"left","textBackgroundColor":""},{"type":"textbox","originX":"left","originY":"top","left":164.5,"top":319.77,"width":150,"height":31.46,"fill":"Black","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","fillRule":"nonzero","globalCompositeOperation":"source-over","transformMatrix":null,"text":"Text Element","fontSize":24,"fontWeight":"normal","fontFamily":"Tinos","fontStyle":"","lineHeight":1.16,"textDecoration":"","textAlign":"center","textBackgroundColor":"","styles":{},"minWidth":20}],"background":{"source":"http://127.0.0.1:90/HTML5CanvasTemplateEditor/admin/uploads/grey_wash_wall.png","repeat":"repeat","offsetX":0,"offsetY":0}}]';

	//$cwidth = 750;
	//$cheight = 600;
	$jsonData = $_POST['jsonData'];
	$cwidth = $_POST['cwidth'];
	$cheight = $_POST['cheight'];
	$rows = $_POST['rows'];
	$cols = $_POST['cols'];
	$savecrop = $_POST['savecrop'];
	/*$cwidth = 5*96;
	$cheight = 7*96;
	$savecrop = 'false';
	$rows = 1;
	$cols = 1;*/
	$rc = $rows * $cols;
	$jsonData = json_decode($jsonData);
	//scale to 0.75 for inch based on DPI.
	$scalef = 72/96;
	//crop mark padding
	$cmp = 0;
	if($savecrop != 'false') {
		$cmp = 10;
	}
	//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false, false);
	//$pdf = new TCPDF("L", "px", array($cwidth, $cheight), true, 'UTF-8', false, false, $objects->src, $objects->backgroundColor);
	//for local
	//$pdf = new TCPDF("L", 'px', array($cwidth*1, $cheight*1), true, 'UTF-8', false, false);
	//for server
	$pdf = new TCPDF('', 'px', array($cwidth * $scalef * $cols + $cmp*2, $cheight * $scalef * $rows + $cmp*2), true, 'UTF-8', false, false);
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetHeaderMargin(0);
	$pdf->SetFooterMargin(0);
	$pdf->SetLeftMargin(0);
	$pdf->SetRightMargin(0);
	$pdf->setPrintFooter(false);
	$pdf->setPrintHeader(false);
	$pdf->setCellMargins(0,0,0,0);
	$pdf->SetCellPaddings(0,0,0,0);
	// set auto page breaks
	$pdf->SetAutoPageBreak(false);
	$pdf->SetDisplayMode(100);
	$totalcanvas = count($jsonData);
	$offsetwidth = $cwidth * $scalef;
	$offsetheight = $cheight * $scalef;
	for ($x = 0; $x < $totalcanvas; $x += $rc) {
		$pdf->AddPage();
		$pdf->StartTransform();
		//$pdf->ScaleXY($scalef * 100);
		$colscount = 0;
		$rowscount = 0;
		for ($y = $x; $y < ($x+$rc); $y++) {
			$objects = $jsonData[$y];
			//$pdf->SetMargins(0 , 0, -1, true);
			/*if($objects->background != '') {
				if(isset($objects->background->source) && !is_null($objects->background->source) && $objects->background->source != '') {
					$pdf->Image($objects->background->source, $objects->background->offsetX, $objects->background->offsetX, $cwidth, $cheight, '', '', '', false, 300, '', false, false, 0);
				} else {
					$bgColor = Hex2RGB($objects->background);
					$pdf->Rect(0, 0, $cwidth, $cheight, 'F', '', $fill_color = array($bgColor[0], $bgColor[1], $bgColor[2]));
				}
			}
			if(isset($objects->backgroundImage) && !is_null($objects->backgroundImage) && $objects->backgroundImage->src != '') {
				$pdf->Image($objects->backgroundImage->src, $objects->backgroundImage->left, $objects->backgroundImage->top, $objects->backgroundImage->width*$objects->backgroundImage->scaleX, $objects->backgroundImage->height*$objects->backgroundImage->scaleY, '', '', '', false);
			}*/
			//echo $top . "</br>";
			if($colscount >= $cols) {
				$colscount = 0;
				$rowscount++;
			}
			// define no-write page regions to avoid text overlapping images
			/*
			    'page' => page number or empy for current page
			    'xt' => X top
			    'yt' => Y top
			    'yb' => Y bottom
			    'side' => page side ('L' = left or 'R' = right)
			*/
			//$pdf->Rect($offsetwidth * $colscount, $offsetheight * $rowscount, $offsetwidth, $offsetheight, 'F', array('L','T','R','B'), array(255, 255, 255));
			// start a new XObject Template and set transparency group option
			$template_id = $pdf->startTemplate($offsetwidth*2, $offsetheight*2, true);
			$pdf->StartTransform();
			if($objects->background != '') {
				if(isset($objects->background->source) && !is_null($objects->background->source) && $objects->background->source != '') {

					$imgx = 0;
					$imgy = 0;
					$data = getimagesize($objects->background->source);
					$iw = (int) $data[0] * $scalef;
					$ih = (int) $data[1] * $scalef;
					while(($imgx <= $cwidth) || ($imgy <= $cheight)) {
						if($imgx <= $cwidth) {
							$pdf->Image($objects->background->source, $offsetwidth + $imgx, $offsetheight + $imgy, $iw, $ih, '', '', '', false, 300, '', false, false, 0);
							$imgx = $imgx + $iw;
						} else if ($imgy <= $cheight) {
							$imgx = 0;
							$imgy = $imgy + $ih;
						}
					}
				} else {
					$bgColor = Hex2RGB($objects->background);
					//$pdf->Rect($offsetwidth, $offsetheight, $offsetwidth, $offsetheight, 'F', '', $fill_color = array($bgColor[0], $bgColor[1], $bgColor[2]));
				}
			}
			// Set Clipping Mask
			$pdf->Rect($offsetwidth, $offsetheight, $offsetwidth, $offsetheight, 'CNZ');
			foreach ($objects->objects as $object) {
				$pdf->StartTransform();
				//echo $object->type;
				//$left = $object->left - ($object->width*$object->scaleX/2);			
				if($object->originX == 'center') 
					$object->left = $object->left - (($object->width*$object->scaleX)/2);

				$left = $object->left*$scalef + $offsetwidth;
				//echo $left . "</br>";
				//$top = $object->top - ($object->height*$object->scaleY/2);
				if($object->originY == 'center') 
					$object->top = $object->top - (($object->height*$object->scaleY)/2);

				$top = $object->top*$scalef + $offsetheight;
				//$left = $left + ($offsetwidth * $colscount);
				//$top = $top + ($offsetheight * $rowscount);
				switch ($object->type) {
					case 'i-text':
					case 'textbox':
						$style = '';
						if($object->fontWeight == 'bold') {
							$style = 'B';
						}
						if($object->fontStyle == 'italic') {
							$style .= 'I';
						}
						if($object->textDecoration == 'underline') {
							$style .= 'U';
						}
						//$style = $object->fontStyle;
						$fontFamily = $object->fontFamily;
						// convert TTF font to TCPDF format and store it on the fonts folder
						$fontpath = "./tcpdf/fonts/googlefonts/" . str_replace(" ","_", $fontFamily) . "/" .  str_replace(" ","", $fontFamily) ."-Regular.ttf";
						if (file_exists($fontpath)) {
							//$fontname = TCPDF_FONTS::addTTFfont($fontpath, 'TrueTypeUnicode', '', 96);
							$fontname = TCPDF_FONTS::addTTFfont($fontpath);
							// use the font
							$pdf->SetFont($fontname, $style, ($object->fontSize) * $scalef * $object->scaleX, '', false);
						} else {
							$pdf->SetFont("times", $style, $object->fontSize * $scalef * $object->scaleX);
						}
						$newColor = Hex2RGB($object->fill);
						//if($left < 0)
						//$left = 0;

						$pdf->setCellHeightRatio($object->lineHeight);
						
						/*$linesize = ($object->height * $scalef / ($object->fontSize * $scalef * $object->lineHeight));
						if($object->lineHeight > 1.2)
							$top = $top - ($object->height / $linesize);

						if($object->lineHeight != '' && $object->lineHeight < 1.2) {
							$pdf->setCellHeightRatio((float) $object->lineHeight * 1.5 * $scalef);
                        }
						if($object->lineHeight != '' && $object->lineHeight > 1.2) {
							$pdf->setCellHeightRatio((float) $object->lineHeight * 1.5 * $scalef);
                        }*/

						//$pdf->SetCellPadding(0);
						//if($object->lineHeight > 1.2)
						//$top = $top - $object->fontSize * 0.25;

						$pdf->setXY($left, $top);
						//$pdf->Rotate(360-($object->angle % 360), $left, $top);
						$pdf->Rotate(360-($object->angle % 360));
						$pdf->SetTextColor($newColor[0], $newColor[1], $newColor[2]);						

						//if($object->lineHeight == 1.2) {
							//$pdf->setCellHeightRatio($object->lineHeight);
						//}

						//$pdf->SetTextColor($object->fill);                
						// Start Transformation
						// Scale by 150% centered by (50,80) which is the lower left corner of the rectangle
						//$pdf->Text($left, $top, $object->text);
						//$pdf->write(2,$object->text);
						//$pdf->MultiCell($object->width, $object->height, $object->text, 0, $align, false);
						$ow = $object->width * $object->scaleX * $scalef + 3;
						$oh = $object->height * $scalef;
						/*if($ow < $offsetwidth)
							$ow = 0;
						if($oh < $offsetheight)                    
							$oh = 0;*/
						$align = $object->textAlign;
						if($align == 'left') {
							$align = 'L';
						}
						if($align == 'center') {
							$align = 'C';
							$ow = $object->width * $object->scaleX * $scalef + 3;
						}
						if($align == 'right') {
							$align = 'R';
							$ow = $object->width * $object->scaleX * $scalef + 3;
						}
						//$pdf->Text(2, 10,$align);
						//$pdf->Text(12, 20, $top);
						//$pdf->setX($left, true);
						//$pdf->setY($left, false, true);
						//$pdf->SetAbsXY($left, $top);
						//$pdf->MultiCell(55, 5, $object->text, 1, 'L', 1, 0, $left, $top, true);
						//$pdf->MultiCell($ow, $oh, $object->text, 'LTRB', $align, false, 1, $left, $top, true, 0, false, false, 0, 'T', false);
						//$pdf->ScaleXY($scalef * 100);
						//$pdf->writeHTMLCell($ow, $oh, '', '', $object->text, 'LTRB', 1, false, false, $align, false);
						$pdf->MultiCell($ow, $oh, $object->text, '', $align, false, 0, '', '', true, 0, false, false, 0, 'T', false);
						//$pdf->writeHTMLCell($ow, $oh, '', '', $object->text, 'LTRB', 2, false, true, $align, false);
						//$pdf->Cell(0, 0, $object->text, 0, 0, $align);
						break;
					case 'image':
						$pdf->setXY($left, $top);
						$pdf->Rotate(360-$object->angle);
						$pdf->setImageScale($object->scaleX);
						//$pdf->ScaleXY($scalef * 100);
						$pdf->Image($object->src, '', '', $object->width * $scalef, $object->height * $scalef, '', '', '', false, 300, '', false, false, 0);
						break;
					case 'cropzoomimage':
						//$left = $object->left - ($object->width*$object->scaleX/2);
						//$top = $object->top - ($object->height*$object->scaleY/2);
						$pdf->setXY($left, $top);
						$pdf->Rotate(360-$object->angle);
						$pdf->setImageScale($object->scaleX);
						//$pdf->ScaleXY($scalef * 100);
						if(strpos($object->src,'.svg') !== false) {
							$pdf->ImageSVG($object->src, '', '', $object->width*$object->scaleX * $scalef, $object->height*$object->scaleY * $scalef, '', '', '', false);
						} else {
							$pdf->Image($object->src, '', '', $object->width*$object->scaleX * $scalef, $object->height*$object->scaleY * $scalef, '', '', '', false);
						}
						break;
					case 'path-group':
						$pdf->setXY($left, $top);
						$pdf->Rotate(360-$object->angle);
						$pdf->setImageScale($object->scaleX);
						//$pdf->ScaleXY($scalef * 100);
						if(strpos($object->visible,'.svg') !== false) {
							$pdf->ImageSVG($object->visible, '', '', $object->width*$object->scaleX * $scalef, $object->height*$object->scaleY * $scalef, '', '', '', false);
						}
						break;
					default:
						break;
				}
				$pdf->StopTransform();
			}
			// end the current Template
			$pdf->endTemplate();
			$pdf->printTemplate($template_id, ($offsetwidth * $colscount) - $offsetwidth + $cmp, ($offsetheight * $rowscount) - $offsetheight + $cmp, $offsetwidth*2, $offsetheight*2, '', '', false);
			if($savecrop != 'false') {
				$pdf->cropMark(($offsetwidth * $colscount) + $cmp, ($offsetheight * $rowscount) + $cmp, $cmp, $cmp, 'TL', array(177,177,177));
				$pdf->cropMark(($offsetwidth * $colscount) + $offsetwidth + $cmp, ($offsetheight * $rowscount) + $cmp, $cmp, $cmp, 'TR', array(177,177,177));	
				$pdf->cropMark(($offsetwidth * $colscount) + $cmp, ($offsetheight * $rowscount) + $offsetheight + $cmp, $cmp, $cmp, 'BL', array(177,177,177));
				$pdf->cropMark(($offsetwidth * $colscount) + $offsetwidth + $cmp, ($offsetheight * $rowscount) + $offsetheight + $cmp, $cmp, $cmp, 'BR', array(177,177,177));
			}
			//$pdf->printTemplate($template_id, ($offsetwidth * $colscount), ($offsetheight * $rowscount), $offsetwidth, $offsetheight, '', '', false);
			$colscount++;
		}
		$pdf->StopTransform();
	}
	$pdf->Close();
	$filename = $_SERVER['DOCUMENT_ROOT'] . "/admin/outputpdfs/" . $_POST['filename'];
	$pdf->Output($filename, 'F');
	echo $filename;
	//$filename = $_SERVER['DOCUMENT_ROOT'] . "/admin/outputpdfs/temp.pdf";
	//echo $pdf->Output('temp.pdf', 'D');
	function Hex2RGB($color){
		$color = str_replace('#', '', $color);
		if (strlen($color) != 6){
			return array(0,0,0);
		}
		$rgb = array();
		for ($x=0;$x<3;$x++){
			$rgb[$x] = hexdec(substr($color,(2*$x),2));
		}
		return $rgb;
	}
?>