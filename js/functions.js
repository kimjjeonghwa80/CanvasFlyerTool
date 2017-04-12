var groupselobject;
var canvasScale = 1;
var roundedcanvasScale = 1;
var SCALE_FACTOR = 1.2;
var state = [];
var statearray = [];
var index = 0;
var indexarray = [];
var savestateaction = true;
var currentcanvasid = 0;
var canvasindex = 0;
var pageindex = 0;
var canvasarray = [];
var isdownloadpdf = false;
var isdownloadype = false;
var totalsvgs = 0;
var convertedsvgs = 0;
var loadedtemplateid = 0;

function saveState() {
    if (savestateaction) {
        console.log("savestate index" + index)
        state[++index] = JSON.stringify(canvas.toDatalessJSON(['logoid', 'selectable', 'evented', 'id']));
    }
};

function addSVGToCanvas(logosvgimg, svgoptions) {
    fabric.loadSVGFromURL(logosvgimg, function(objects, options) {
        var loadedObject = fabric.util.groupSVGElements(objects, options);
        loadedObject.set({
            scaleX: canvasScale,
            scaleY: canvasScale
                //perPixelTargetFind: true,
                //targetFindTolerance: 4 
        });
        var objects = loadedObject.getObjects()
        loadedObject.src = logosvgimg;
        canvas.add(loadedObject);
        loadedObject.center();
        if (svgoptions) {
            loadedObject.left = svgoptions.left;
            loadedObject.top = svgoptions.top;
            loadedObject.scaleX = svgoptions.scaleX;
            loadedObject.scaleY = svgoptions.scaleY;
            loadedObject.angle = svgoptions.angle;
            loadedObject.flipX = svgoptions.flipX;
            loadedObject.flipY = svgoptions.flipY;
        }
        loadedObject.setCoords();
        saveState();
        loadedObject.hasRotatingPoint = true;
        canvas.renderAll();
    });
}

function addUploadedSVGToCanvas(svgimg) {
    var svgImgPath = "./uploads/" + svgimg;
    fabric.loadSVGFromURL(svgImgPath, function(objects, options) {
        var loadedObject = fabric.util.groupSVGElements(objects, options);
        loadedObject.set({
            left: 200,
            top: 200,
            scaleX: canvasScale,
            scaleY: canvasScale
                //perPixelTargetFind: true,
                //targetFindTolerance: 4 
        });
        loadedObject.src = svgImgPath;
        canvas.add(loadedObject);
        loadedObject.center();
        loadedObject.setCoords();
        saveState();
        loadedObject.hasRotatingPoint = true;
        canvas.renderAll();
    });
}

function setControlsVisibility(object) {
    object.setControlsVisibility({
        tl: true, // top left
        tr: true, // top right
        bl: true, // bottom left
        br: true, // bottom right
        mt: true, // middle top disable
        mb: true, // midle bottom disable
        ml: true, // middle left disable
        mr: true, // middle right disable
    });
    object.hasControls = true;
}

function addCanvasToPage(dupflag, pageid, jsonarray) {
    var rows = document.getElementById("numOfcanvasrows").value,
        cols = document.getElementById("numOfcanvascols").value;
    $('.deletecanvas').css('display', 'block');
    var rc = parseInt(rows) * parseInt(cols) * parseInt(pageid);
    var dupcount = 0;
    var jsonarrcount = 1;
    for (var i = 1; i <= rows; i++) {
        $("#page" + pageindex).append("<table><tr>");
        for (var j = 1; j <= cols; j++) {
            addNewCanvas();
            if (dupflag) {
                var currentcanvasjson = canvasarray[rc + dupcount].toDatalessJSON();
                canvas.loadFromDatalessJSON(currentcanvasjson);
                canvas.renderAll();
                dupcount++;
            }
        }
        $("#page" + pageindex).append("</tr></table>");
    }
}

function setCanvasSize() {
    var width = document.getElementById("loadCanvasWid").value,
        height = document.getElementById("loadCanvasHei").value;
	setCanvasWidthHeight(width, height);
	
    adjustIconPos(pageindex);
    $("#canvaswh_modal").modal('hide');
    $('.deletecanvas').css('display', 'none');
}

function addFileToCanvas(imagefile) {
    fabric.util.loadImage("./uploads/" + imagefile, function(img) {
        var object = new fabric.Cropzoomimage(img, {
            left: canvas.getWidth() / 2,
            top: canvas.getHeight() / 2,
            scaleX: canvasScale / 2,
            scaleY: canvasScale / 2
                //perPixelTargetFind: true,
                //targetFindTolerance: 4 
        });
        object.src = "uploads/" + imagefile;
        canvas.add(object);
        canvas.setActiveObject(object);
        object.center();
        object.setCoords();
        setControlsVisibility(object);
        $("#spinnerModal").modal('hide');
        canvas.renderAll();
        saveState();
    }, {
        crossOrigin: ''
    });
}

var deleteitembtn = document.getElementById('deleteitem');
if (deleteitembtn) {
    deleteitembtn.onclick = function() {
        deleteItem();
    }
}

function deleteItem() {
    var activeObject = canvas.getActiveObject();
    if (!activeObject) activeObject = canvas.getActiveGroup();
    if (!activeObject) return;
    if (activeObject.type == "group") {
        activeObject.forEachObject(function(object) {
            canvas.remove(object);
        });
    } else {
        canvas.remove(activeObject);
    }
    canvas.deactivateAll().renderAll();
    saveState();
}

var undoSwitch = document.getElementById('undo');
if (undoSwitch) {
    undoSwitch.onclick = function() {
        console.log(index)
        savestateaction = false;
        index--;
        if (index <= 0) {
            index = 0;
            if (!state[index]) {
                return;
            }
            var json = jQuery.parseJSON(state[index]).objects;
            json = '{"objects":' + JSON.stringify(json) + ',"background":""}';
            canvas.loadFromDatalessJSON(json, canvas.renderAll.bind(canvas));
            //myEditor.changeView(myEditor.currentView);
            return;
        }
        if (!state[index]) {
            return;
        }
        var json = jQuery.parseJSON(state[index]).objects;
        json = '{"objects":' + JSON.stringify(json) + ',"background":""}';
        canvas.loadFromDatalessJSON(json, canvas.renderAll.bind(canvas));
        if (index == 0) {}
        savestateaction = true;
        canvas.renderAll();
    };
}
var redoSwitch = document.getElementById('redo');
if (redoSwitch) {
    redoSwitch.onclick = function() {
        console.log(index)
        index++;
        savestateaction = false;
        if (index >= state.length - 1) {
            index = state.length - 1;
            if (!state[index]) {
                return;
            }
            var json = jQuery.parseJSON(state[index]).objects;
            json = '{"objects":' + JSON.stringify(json) + ',"background":""}';
            canvas.loadFromDatalessJSON(json, canvas.renderAll.bind(canvas));
            return;
        }
        if (!state[index]) {
            return;
        }
        var json = jQuery.parseJSON(state[index]).objects;
        json = '{"objects":' + JSON.stringify(json) + ',"background":""}';
        canvas.loadFromDatalessJSON(json, canvas.renderAll.bind(canvas));
        savestateaction = true;
    };
}

function setCanvasWidthHeight(width, height) {
    if (width) {
        //if (canvasScale == 1)
        //$("#productWidth").html(Math.round((width * 2.54 / 300) * 10));
        for (var i = 0, j = 0; i <= canvasindex; i++) {
            if (!canvasarray[i]) continue;
            canvasarray[i].width = width;
            var canvasDOM = document.getElementById('canvas' + i);
            canvasDOM.style.width = width / 1.2 + "px";
            canvasDOM.width = width;
            var elem = document.getElementsByClassName('upper-canvas')[i];
            elem.style.width = width / 1.2 + "px";
            elem.width = width;
            var elem = document.getElementsByClassName('canvas-container')[i];
            elem.style.width = width / 1.2 + "px";
            elem.width = width;
            var elem = document.getElementsByClassName('canvascontent')[i];
            elem.style.width = width / 1.2 + "px";
            elem.width = width;
            var elem = document.getElementById('divcanvas' + i);
            elem.style.width = width / 1.2 + "px";
            elem.width = width;
            j++;
            canvasarray[i].calcOffset();
            canvasarray[i].renderAll();
        }
    }
    if (height) {
        //if (canvasScale == 1)
        //$("#productHeight").html(Math.round((height * 2.54 / 300) * 10));
        for (var i = 0, j = 0; i <= canvasindex; i++) {
            if (!canvasarray[i]) continue;
            canvasarray[i].height = height;
            var canvasDOM = document.getElementById('canvas' + i);
            canvasDOM.style.height = height / 1.2 + "px";
            canvasDOM.height = height;
            var elem = document.getElementsByClassName('upper-canvas')[i];
            elem.style.height = height / 1.2 + "px";
            elem.height = height;
            var elem = document.getElementsByClassName('canvas-container')[i];
            elem.style.height = height / 1.2 + "px";
            elem.height = height;
            var elem = document.getElementsByClassName('canvascontent')[i];
            elem.style.height = height / 1.2 + "px";
            elem.height = height;
            var elem = document.getElementById('divcanvas' + i);
            elem.style.height = height / 1.2 + "px";
            elem.height = height;
            j++;
            canvasarray[i].calcOffset();
            canvasarray[i].renderAll();
        }
    }
    canvas.calcOffset();
    canvas.renderAll();
    $("#canvaswidth").val('');
    $("#canvaswidth").val(Math.round(canvas.getWidth()));
    $("#canvasheight").val('');
    $("#canvasheight").val(Math.round(canvas.getHeight()));
}
// button Zoom In
$("#btnZoomIn").click(function() {
    zoomIn();
    for (var i = 0; i <= pageindex; i++) {
        adjustIconPos(i);
    }
});
// button Zoom Out
$("#btnZoomOut").click(function() {
    zoomOut();
    for (var i = 0; i <= pageindex; i++) {
        adjustIconPos(i);
    }
});
// Zoom In
function zoomIn() {
    // Set max zoom at 500%
    if (canvasScale * SCALE_FACTOR > 5) {
        $("#zoomperc").html(Math.round(5 * 100) + '%');
        return;
    }
    canvas.deactivateAll().renderAll();
    canvasScale = canvasScale * SCALE_FACTOR;
    setCanvasWidthHeight(canvas.getWidth() * SCALE_FACTOR, canvas.getHeight() * SCALE_FACTOR);
    for (var j = 0; j < canvasindex; j++) {
        if (!canvasarray[j]) continue;
        var objects = canvasarray[j].getObjects();
        for (var i in objects) {
            var scaleX = objects[i].scaleX;
            var scaleY = objects[i].scaleY;
            var left = objects[i].left;
            var top = objects[i].top;
            var tempScaleX = scaleX * SCALE_FACTOR;
            var tempScaleY = scaleY * SCALE_FACTOR;
            var tempLeft = left * SCALE_FACTOR;
            var tempTop = top * SCALE_FACTOR;
            objects[i].scaleX = tempScaleX;
            objects[i].scaleY = tempScaleY;
            objects[i].left = tempLeft;
            objects[i].top = tempTop;
            objects[i].setCoords();
        }
        canvasarray[j].renderAll();
    }
    $("#zoomperc").html('');
    $("#zoomperc").html(Math.round(canvasScale * 100) + '%');
}
// Reset Zoom
function resetZoom() {
    setCanvasWidthHeight(canvas.getWidth() * (1 / canvasScale), canvas.getHeight() * (1 / canvasScale));
    for (var j = 0; j < canvasindex; j++) {
        if (!canvasarray[j]) continue;
        var objects = canvasarray[j].getObjects();
        for (var i in objects) {
            var scaleX = objects[i].scaleX;
            var scaleY = objects[i].scaleY;
            var left = objects[i].left;
            var top = objects[i].top;
            var tempScaleX = scaleX * (1 / canvasScale);
            var tempScaleY = scaleY * (1 / canvasScale);
            var tempLeft = left * (1 / canvasScale);
            var tempTop = top * (1 / canvasScale);
            objects[i].scaleX = tempScaleX;
            objects[i].scaleY = tempScaleY;
            objects[i].left = tempLeft;
            objects[i].top = tempTop;
            objects[i].setCoords();
        }
        canvasarray[j].renderAll();
    }
    canvasScale = 1;
    $("#zoomperc").html('');
    $("#zoomperc").html(Math.round(canvasScale * 100) + '%');
}
// Zoom Out
function zoomOut() {
    canvas.deactivateAll().renderAll();
    canvasScale = canvasScale / SCALE_FACTOR;
    setCanvasWidthHeight(canvas.getWidth() * (1 / SCALE_FACTOR), canvas.getHeight() * (1 / SCALE_FACTOR));
    for (var j = 0; j < canvasindex; j++) {
        if (!canvasarray[j]) continue;
        var objects = canvasarray[j].getObjects();
        for (var i in objects) {
            var scaleX = objects[i].scaleX;
            var scaleY = objects[i].scaleY;
            var left = objects[i].left;
            var top = objects[i].top;
            var tempScaleX = scaleX * (1 / SCALE_FACTOR);
            var tempScaleY = scaleY * (1 / SCALE_FACTOR);
            var tempLeft = left * (1 / SCALE_FACTOR);
            var tempTop = top * (1 / SCALE_FACTOR);
            objects[i].scaleX = tempScaleX;
            objects[i].scaleY = tempScaleY;
            objects[i].left = tempLeft;
            objects[i].top = tempTop;
            objects[i].setCoords();
        }
        canvasarray[j].renderAll();
    }
    $("#zoomperc").html('');
    $("#zoomperc").html(Math.round(canvasScale * 100) + '%');
}
$("#saveimage").click(function() {
    $('#templateSaveModal').modal('hide');

    if (loadedtemplateid == 0)
        $('#savetemplate_modal').modal('show');
    else
        proceed_savetemplate();
});
$("#downloadAsJPEG").click(function() {
    downloadImage();
});
$("#downloadAsPDF").click(function() {
    isdownloadpdf = true;
    resetZoom();
    processSVGs();
});

function saveTemplate() {

    if (totalsvgs == convertedsvgs && loadedtemplateid != 0) {
        isdownloadype = false;
        var jsonCanvasArray = [];
        var width = document.getElementById("loadCanvasWid").value,
            height = document.getElementById("loadCanvasHei").value,
            rows = document.getElementById("numOfcanvasrows").value,
            cols = document.getElementById("numOfcanvascols").value;
        var wh = '{\"width\": ' + width + ', \"height\": ' + height + ', \"rows\": ' + rows + ', \"cols\": ' + cols + '}';
        jsonCanvasArray.push(wh);
        var firstcanvas;
        for (var i = 0; i < canvasindex; i++) {
            if (!canvasarray[i]) continue;
            canvasarray[i].deactivateAll().renderAll();
            if ($("#divcanvas" + i).is(":visible")) {
                if (!firstcanvas) firstcanvas = canvasarray[i];
                jsonCanvasArray.push(canvasarray[i].toDatalessJSON());
            }
        }
        var jsonData = JSON.stringify(jsonCanvasArray);
        var pngdataURL = firstcanvas.toDataURL("image/png");
        var path = "templates";
        $.ajax({
            type: 'POST',
            url: 'updatetemplate.php',
            data: {
                pngimageData: pngdataURL,
                path: path,
                jsonData: jsonData,
                templateid: loadedtemplateid
            },
            success: function(msg) {
                $('#spinnerModal').modal('hide');
                getTemplates();
            }
        })
    }
    if (totalsvgs == convertedsvgs && loadedtemplateid == 0) {
        isdownloadype = false;
        var jsonCanvasArray = [];
        var width = document.getElementById("loadCanvasWid").value,
            height = document.getElementById("loadCanvasHei").value,
            rows = document.getElementById("numOfcanvasrows").value,
            cols = document.getElementById("numOfcanvascols").value;
        var wh = '{\"width\": ' + width + ', \"height\": ' + height + ', \"rows\": ' + rows + ', \"cols\": ' + cols + '}';
        jsonCanvasArray.push(wh);
        var firstcanvas;
        for (var i = 0; i < canvasindex; i++) {
            if (!canvasarray[i]) continue;
            canvasarray[i].deactivateAll().renderAll();
            if ($("#divcanvas" + i).is(":visible")) {
                if (!firstcanvas || (firstcanvas.getObjects().length < canvasarray[i].getObjects().length)) firstcanvas = canvasarray[i];
                jsonCanvasArray.push(canvasarray[i].toDatalessJSON());
            }
        }
        var jsonData = JSON.stringify(jsonCanvasArray);
        var pngdataURL = firstcanvas.toDataURL("image/png");
        var filename = $('#templatename').val();
        var path = "templates";
        $.ajax({
            type: 'POST',
            url: 'saveastemplate.php',
            data: {
                pngimageData: pngdataURL,
                path: path,
                jsonData: jsonData,
                filename: filename
            },
            success: function(msg) {
                $('#spinnerModal').modal('hide');
                getTemplates();
            }
        })
    }
}

function saveassvg(svgData, jsonData) {
    console.log(jsonData)
    var filename = $('#elmtname').val();
    var categoryId = $('#elmt_category option:selected').val();
    var path = "uploads/";
    //lsvgobj.visible = path + filename + '.svg';
    $.ajax({
        type: 'POST',
        url: 'saveassvg.php',
        data: {
            path: path,
            filename: filename,
            svgData: svgData,
            jsonData: jsonData,
            category: categoryId,
        },
        success: function(msg) {
            getcatimages('');
        }
    })
}

function proceed_savetemplate() {
    $("#savetemplate_modal").modal('hide');
    $('#spinnerModal').modal('show');
    isdownloadype = true;
    resetZoom();
    canvas.deactivateAll().renderAll();
    processSVGs();
}

function downloadImage() {

    $('#publishModal').modal('hide');
    $("#spinnerModal").modal('show');
    var cwidth = document.getElementById("loadCanvasWid").value;
    var cheight = document.getElementById("loadCanvasHei").value;
    var cols = document.getElementById("numOfcanvascols").value;
    var rows = document.getElementById("numOfcanvasrows").value;
    
    var scaleper = 1;
    for (var i = 0; i < canvasindex; i++) {
        if (!canvasarray[i]) continue;
        canvasarray[i].deactivateAll().renderAll();

        var objects = canvasarray[i].getObjects().filter(function(o) {
            return o.type == 'cropzoomimage';
        });       

        if(objects.length > 0) {
            if(objects[0].scaleX < 1) {
                scaleper = canvasScale = objects[0].scaleX;
                resetZoom();
                break;
            }
        }
    }

    //inch to pixel
    cwidth = cwidth * 1/scaleper;
    cheight = cheight * 1/scaleper;
    var buffer = document.getElementById("outputcanvas");
    var buffer_context = buffer.getContext("2d");
    buffer.width = parseInt(cwidth) * parseInt(cols);
    var hiddencanvascount = parseInt(cols) * parseInt(rows) * (pageindex + 1) - $(".divcanvas:visible").length;
    buffer.height = parseInt(cheight) * ((parseInt(rows) * (pageindex + 1)) - hiddencanvascount/parseInt(cols));

    var h = 0;
    var writtenpages = 0;
    var processpages = 0;
    var rowcount = 0;
    var colcount = 0;

    for (var i = 0; i < canvasindex; i++) {
        if (!canvasarray[i]) continue;
        canvasarray[i].deactivateAll().renderAll();
        var ito = getinfotextobj(canvasarray[i]);
        if (ito) ito.opacity = 0;
        if ($("#divcanvas" + i).is(":visible")) {
            processpages++;
            if (colcount >= cols) {
                colcount = 0;
                rowcount++;
            }
            w = cwidth * colcount;
            h = cheight * rowcount;
            colcount++;
            (function(li, c, r) {
                var img = new Image();
                img.onload = function() {
                    buffer_context.drawImage(this, c, r);
                    writtenpages++;
                    if (writtenpages == processpages) {
                        var jpegdataURL = buffer.toDataURL("image/jpeg");
                        jpegdataURL = jpegdataURL.replace('data:image/jpeg;base64,', '');
                        var jsonCanvas = canvas.toDatalessJSON();;
                        var currentTime = new Date();
                        var month = currentTime.getMonth() + 1;
                        var day = currentTime.getDate();
                        var year = currentTime.getFullYear();
                        var hours = currentTime.getHours();
                        var minutes = currentTime.getMinutes();
                        var seconds = currentTime.getSeconds();
                        var filename = month + '' + day + '' + year + '' + hours + '' + minutes + '' + seconds;
                        var path = "uploads/savetemplate/";
                        $.ajax({
                            type: 'POST',
                            url: 'saveimage.php',
                            data: {
                                jpegimageData: jpegdataURL,
                                path: path,
                                filename: filename
                            },
                            success: function(msg) {
                                window.location.href = 'downloadfile.php?file=uploads/savetemplate/' + filename + '.jpeg';
                                $('#spinnerModal').modal('hide');
                                setTimeout(function() {
                                    deleteImage(msg);
                                }, 18000);
                                resizeDownCanvas();
                                canvasScale = 1;
                                $("#zoomperc").html('');
                                $("#zoomperc").html(Math.round(canvasScale * 100) + '%');
                            }
                        })
                    }
                };
                img.src = canvasarray[li].toDataURL("image/png");
            })(i, w, h);
        }
    }    
}

function resizeDownCanvas() {
    canvasScale = Math.round(canvasScale*10)/10;
    if(Math.round(canvas.width) - 20 >= $("#rightsection").width()) {
        zoomOut();
        resizeDownCanvas();
    }
}

function savesvg(svgobj) {
    tempcanvas.clear();
    (function(lsvgobj) {
        if (fabric.util.getKlass(lsvgobj.type).async) {
            lsvgobj.clone(function(clone) {
                tempcanvas.width = clone.width * clone.scaleX;
                tempcanvas.height = clone.height * clone.scaleY;
                clone.originX = 'center';
                clone.originY = 'center';
                clone.angle = 0;
                tempcanvas.add(clone);
                clone.center();
                svgData = tempcanvas.toSVG();
                console.log(svgData);
                //save new svg to server
                var filename = Math.floor((Math.random() * 100000) + 1); //for unique file name.
                var path = "newsvgs/";
                lsvgobj.visible = path + filename + '.svg';
                $.ajax({
                    type: 'POST',
                    url: 'savesvg.php',
                    data: {
                        path: path,
                        filename: filename,
                        svgData: svgData
                    },
                    success: function(msg) {
                        convertedsvgs++;
                        setTimeout(function() {
                            deleteImage(msg);
                        }, 8000);
                        if (isdownloadpdf) downloadPdf();
                        if (isdownloadype) saveTemplate();
                    }
                })
            });
        }
    })(svgobj);
    if (isdownloadpdf) downloadPdf();
    if (isdownloadype) saveTemplate();
}
var savecrop = false;

function downloadPdf() {
    if (totalsvgs == convertedsvgs) {
        isdownloadpdf = false;
        if ($('input#savecrop').is(':checked')) {
            savecrop = true;
        }
        var currentTime = new Date();
        var month = currentTime.getMonth() + 1;
        var day = currentTime.getDate();
        var year = currentTime.getFullYear();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        var filename = month + '' + day + '' + year + '' + hours + '' + minutes + '' + seconds;
        filename = filename + ".pdf";
        var jsonCanvasArray = [];
        for (var i = 0; i < canvasindex; i++) {
            if ($("#divcanvas" + i).is(":visible")) {
                //jsonCanvasArray.push(canvasarray[i].toDatalessJSON());
                jsonCanvasArray.push(canvasarray[i].toSVG());
            }
        }
        var jsonData = JSON.stringify(jsonCanvasArray);
        console.log(jsonData);
        var cwidth = document.getElementById("loadCanvasWid").value;
        var cheight = document.getElementById("loadCanvasHei").value;
        var rows = document.getElementById("numOfcanvasrows").value;
        var cols = document.getElementById("numOfcanvascols").value;
        var path = "uploads/savetemplate/";
        $.ajax({
            type: 'POST',
            url: 'pdf.php',
            data: {
                filename: filename,
                jsonData: jsonData,
                cwidth: cwidth,
                cheight: cheight,
                rows: rows,
                cols: cols,
                savecrop: savecrop
            },
            success: function(msg) {
                window.location.href = "downloadfile.php?file=" + msg;
                savecrop = false;
                setTimeout(function() {
                    deleteImage(msg);
                }, 8000);
                $("#spinnerModal").modal('hide');
            }
        })
    }
}

function processSVGs() {
    totalsvgs = 0;
    convertedsvgs = 0;
    $('#publishModal').modal('hide');
    $('#pdfdownloadModal').modal('hide');
    $("#spinnerModal").modal('show');
    for (var i = 0; i < canvasindex; i++) {
        if ($("#divcanvas" + i).is(":visible")) {
            var objects = canvasarray[i].getObjects();
            for (var j = 0; j < objects.length; j++) {
                if (objects[j] && objects[j].type == 'path-group') {
                    totalsvgs++;
                    savesvg(objects[j]);
                }
            }
        }
    }
    if (isdownloadpdf) downloadPdf();
    if (isdownloadype) saveTemplate();
}

function deleteImage(file_name) {
    $.ajax({
        type: 'POST',
        url: 'deleteimage.php',
        data: {
            filename: file_name,
        },
        success: function(msg) {
            //alert(msg);
        }
    });
}
// JavaScript Document
$("#addCategory").click(function() {
    $("#Addcategoryodal").modal('show');
});
$("#addTemplateCategory").click(function() {
    $("#AddTemplatecategoryModal").modal('show');
});
$("#addBGCategory").click(function() {
    $("#AddBGcategoryodal").modal('show');
});
$("#addTextCategory").click(function() {
    $("#AddTextcategoryModal").modal('show');
});
$("#saveText").click(function() {
    $('#savetext_modal').modal('show');
});
$("#saveElement").click(function() {
    $('#saveelement_modal').modal('show');
});
$("#addElement").click(function() {
    $("#AddelementModal").modal('show');
});
$("#addBackground").click(function() {
    $("#AddbackgroundModal").modal('show');
});
$("#deletetempcat").click(function() {
    var sel_tempcatid = $('#tempcat-select').val();
    if (sel_tempcatid != '') {
        $("#Del_templatecatmodal").modal('show');
    } else {
        $("#alertModal").modal('show');
        $('#responceMessage').html('Please select the Category, you wish to delete.');
    }
});
$("#deleteCategory").click(function() {
    var sel_catid = $('#cat-select').val();
    if (sel_catid != '') {
        $("#Del_catmodal").modal('show');
    } else {
        $("#alertModal").modal('show');
        $('#responceMessage').html('Please select the Category, you wish to delete.');
    }
});
$("#deleteBGCategory").click(function() {
    var sel_bgcatid = $('#bgcat-select').val();
    if (sel_bgcatid != '') {
        $("#Del_bgcatmodal").modal('show');
    } else {
        $("#alertModal").modal('show');
        $('#responceMessage').html('Please select the Category, you wish to delete.');
    }
});
$('#deleteEle').click(function() {
    $('#spinnerModal').modal('hide');
    var selectedImg = [];
    $('.catimg-checkbox:checked').each(function() {
        selectedImg.push($(this).val());
    });
    if (selectedImg != '') {
        selectedImg = selectedImg.join(',');
        $.post("actions/deleteElement.php", {
            "elementid": selectedImg
        }, function(data) {
            $('#spinnerModal').modal('hide');
            $('#catimage_container').empty();
            getcategory();
            getcatimages('');
            document.getElementById("successMessage").innerHTML = data;
            $('#successModal').modal('show');
        });
    } else {
        $("#alertModal").modal('show');
        $('#responceMessage').html('Please select the Element(s), you wish to delete.');
    }
});

$('#deleteBackground').click(function() {
    $('#spinnerModal').modal('hide');
    var selectedImg = [];
    $('.bgimg-checkbox:checked').each(function() {
        selectedImg.push($(this).val());
    });
    if (selectedImg != '') {
        selectedImg = selectedImg.join(',');
        $.post("actions/deleteBackground.php", {
            "bgid": selectedImg
        }, function(data) {
            $('#spinnerModal').modal('hide');
            $('#background_container').empty();
            //IsBgselected = true;
            getBgcategory();
            getbgimages('');
            document.getElementById("successMessage").innerHTML = data;
            $('#successModal').modal('show');
        });
    } else {
        $("#alertModal").modal('show');
        $('#responceMessage').html('Please select the Background(s), you wish to delete.');
    }
});

function proceed_tempDelete() {
    $('#Del_tempModal').modal('hide');
    $('#spinnerModal').modal('show');
    var selectedTemp = tempIdToDel;

    if (selectedTemp != '') {
        $.post("actions/deleteTemplate.php", {
            "templateid": selectedTemp
        }, function(data) {
            $('#spinnerModal').modal('hide');
            document.getElementById("successMessage").innerHTML = data;
            $('#successModal').modal('show');
            $('#template_container').empty();
            getTemplates();
        });
    } else {
        $("#alertModal").modal('show');
        $('#responceMessage').html('Please select the Template(s), you wish to delete.');
    }
}

function getcategory() {
    $.ajax({
        type: "post",
        url: "actions/getCategory.php",
        success: function(data) {
            $("#cat-select").empty();
            $("#cat-select").html(data);
            $("#element_category").empty();
            $("#element_category").html(data);
            $("#elmt_category").empty();
            $("#elmt_category").html(data);
        }
    });
}

function gettempcategory() {
    $.ajax({
        type: "post",
        url: "actions/gettempCategory.php",
        success: function(data) {
            $("#tempcat-select").empty();
            $("#tempcat-select").html(data);
            $("#template_category").empty();
            $("#template_category").html(data);
        }
    });
}

function getBgcategory() {
    $.ajax({
        type: "post",
        url: "actions/getBgCategory.php",
        success: function(data) {
            $("#bgcat-select").empty();
            $("#bgcat-select").html(data);
            $("#bg_category").empty();
            $("#bg_category").html(data);
        }
    });
}

function getTextcategory() {
    $.ajax({
        type: "post",
        url: "actions/getTextCategory.php",
        success: function(data) {
            $("#textcat-select").empty();
            $("#textcat-select").html(data);
            $("#text_category").empty();
            $("#text_category").html(data);
        }
    });
}

function getTemplatesName() {
    $.ajax({
        type: "post",
        url: "actions/getTemplate_name.php",
        success: function(data) {
            $("#template-select").empty();
            $("#template-select").html(data);
        }
    });
}
<!-- Category form validate -->
$(document).ready(function() {
    $('#addcategoryform').validate({
        rules: {
            category: {
                required: true
            }
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        success: function(element) {
            element.text('').addClass('valid').closest('.form-group').removeClass('has-error').addClass('has-success');
        },
        submitHandler: function(form) { // <- only fires when form is valid
            var newcategory = $("#category").val();
            $('#Addcategoryodal').modal('hide');
            $("#spinnerModal").modal('show');
            $.post("actions/addcategory.php", {
                "categoty": newcategory
            }, function(data) {
                $('#spinnerModal').modal('hide');
                $('#catimage_container').empty();
                getcategory();
                getcatimages('');
                document.getElementById("successMessage").innerHTML = data;
                $('#successModal').modal('show');
                $('#addcategoryform')[0].reset();
            });
        }
    });
});

function proceed_tempcatdelete() {
    var sel_tmpcatid = $('#tempcat-select').val();
    $('#Del_templatecatmodal').modal('hide');
    $("#spinnerModal").modal('show');
    $.post("actions/deletetempcategory.php", {
        "categoty": sel_tmpcatid
    }, function(data) {
        $('#spinnerModal').modal('hide');
        $('#template_container').empty();
        getTemplates();
        gettempcategory('');
        document.getElementById("successMessage").innerHTML = data;
        $('#successModal').modal('show');
    });
}

function proceed_catdelete() {
    var sel_catid = $('#cat-select').val();
    $('#Del_catmodal').modal('hide');
    $("#spinnerModal").modal('show');
    $.post("actions/deletecategory.php", {
        "categoty": sel_catid
    }, function(data) {
        $('#spinnerModal').modal('hide');
        $('#catimage_container').empty();
        getcategory();
        getcatimages('');
        document.getElementById("successMessage").innerHTML = data;
        $('#successModal').modal('show');
    });
}

<!-- Teremplate Category form validate -->
$(document).ready(function() {
    $('#addtemplatecategoryform').validate({
        rules: {
            templatecategory: {
                required: true
            }
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        success: function(element) {
            element.text('').addClass('valid').closest('.form-group').removeClass('has-error').addClass('has-success');
        },
        submitHandler: function(form) { // <- only fires when form is valid
            var tempcategory = $("#templatecategory").val();
            $('#AddTemplatecategoryModal').modal('hide');
            $("#spinnerModal").modal('show');
            $.post("actions/addcategory.php", {
                "templatecat": tempcategory
            }, function(data) {
                $('#spinnerModal').modal('hide');
                gettempcategory();
                getcatimages('');
                document.getElementById("successMessage").innerHTML = data;
                $('#successModal').modal('show');
                $('#addtemplatecategoryform')[0].reset();
            });
        }
    });
});

<!-- File Upload --->
function readIMG(input) {
    //console.log(input);
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#previewImage').show();
            $('#previewImage').attr('src', e.target.result).width(150).height(150);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
var files;
$('#element_img').on('change', prepareUpload);

function prepareUpload(event) {
    files = event.target.files;
    uploadimage();
}

function uploadimage() {
    var data = new FormData();
    //adding file content to data
    $.each(files, function(key, value) {
        data.append("element_img", value);
    });
    $.ajax({
        url: 'upload.php?files',
        type: 'POST',
        data: data,
        cache: false,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data) {
            alert(data)
        }
    });
}
/*function addNewCanvasPage(dupflag, pageid) {
    pageindex++;
    $("#canvaspages").append("<div class='page' id='page" + pageindex + "'></div>");
    addCanvasToPage(dupflag, pageid);
}*/

function addNewCanvas() {
    statearray.push([]);
    indexarray.push(0);
    var ito = getinfotextobj();
    if (ito) ito.opacity = 0;
    if (typeof canvas !== "undefined") {
        canvas.deactivateAll().renderAll();
        var objects = canvas.getObjects();
        for (var i = 0; i < objects.length; i++) {
            objects[i].selectable = false;
        }        
    }
    $("#page" + pageindex).append("<td align='center' id='divcanvas" + canvasindex + "' onClick='javascript:selectCanvas(this.id);' class='divcanvas'><div class='canvascontent' ><canvas id='canvas" + canvasindex + "' class='canvas'></canvas></div></td>");
    canvas = new fabric.Canvas('canvas' + canvasindex);
    canvas.rotationCursor = 'url("img/rotatecursor2.png") 10 10, crosshair';
    canvas.backgroundColor = '#ffffff';
    canvas.selectionColor = 'rgba(255,255,255,0.3)';
    canvas.selectionBorderColor = 'rgba(0,0,0,0.1)';
    canvas.hoverCursor = 'pointer';
    canvasarray.push(canvas);
    var width = document.getElementById("loadCanvasWid").value,
        height = document.getElementById("loadCanvasHei").value;
    setCanvasWidthHeight(width * canvasScale, height * canvasScale);
    initCanvasEvents();
    addinfotext();
    canvas.calcOffset();
    canvas.renderAll();
    state = [];
    index = 0;
    currentcanvasid = canvasindex;
    canvasindex++;
    saveState();
}

function selectCanvas(id) {
    var ito = getinfotextobj();
    if (ito) ito.opacity = 0;
    id = id.replace("divcanvas", "");
    if (currentcanvasid == parseInt(id)) return;
    canvas.deactivateAll().renderAll();
    for (var i = 0, j = 0; i < canvasindex; i++) {
        $("#canvas" + i).css("box-shadow", "");
    }
    $("#canvas" + id).css("box-shadow", "3px 3px 3px #888888");
    if (currentcanvasid == parseInt(id)) return;

    if (state.length > 0) {
        statearray[currentcanvasid] = state;
        indexarray[currentcanvasid] = index;
    }

    currentcanvasid = parseInt(id);
    var objects = canvas.getObjects();
    for (var i = 0; i < objects.length; i++) {
        objects[i].selectable = true;
    }

    var tempcanvas = canvasarray[parseInt(id)];
    if (tempcanvas) canvas = tempcanvas;
    var tempstate = statearray[parseInt(id)];
    if (tempstate)
        state = tempstate;
    else
        state = [];

    var tempindex = indexarray[parseInt(id)];
    if (tempindex)
        index = tempindex;
    else
        index = 0;

    canvas.renderAll();
}

function adjustIconPos(id) {
    //set duplicate / delete icons left top positions.
    var p = $("#page" + id);
    var position = p.position();
    // .outerWidth() takes into account border and padding.
    var width = p.outerWidth();
    var height = p.outerHeight();
    $("#duplicatecanvas" + id).css({
        position: "absolute",
        top: (position.top + height / 2) + "px",
        left: (position.left + width + 10) + "px"
    }).show();
    $("#deletecanvas" + id).css({
        position: "absolute",
        top: (position.top + height / 2 + 25) + "px",
        left: (position.left + width + 10) + "px"
    }).show();
    if ($(".page:visible").length == 1) {
        $('.deletecanvas').css('display', 'none');
    }
}
$(".deletecanvas").click(function() {
    var id = this.id;
    id = id.replace("deletecanvas", "");
    var pageid = id;
    id = "#page" + id;
    //$(id).detach();
    $(id).hide();
    $("#canvaspages").find(".page").each(function() {
        var nextid = this.id;
        nextid = nextid.replace("page", "");
        adjustIconPos(nextid);
    });
    if ($(".page:visible").length == 1) {
        $('.deletecanvas').css('display', 'none');
    }
});

function openTemplate(jsons, isSave, filename) {
    var jsonCanvasArray = JSON.parse(jsons);
    if (!jsonCanvasArray || jsonCanvasArray.length <= 0) return;
    var wh = jsonCanvasArray[0];
    wh = JSON.parse(wh);
    //pixel to inch
    document.getElementById("loadCanvasWid").value = parseFloat(wh.width);
    document.getElementById("loadCanvasHei").value = parseFloat(wh.height);
    document.getElementById("numOfcanvasrows").value = parseInt(wh.rows);
    document.getElementById("numOfcanvascols").value = parseInt(wh.cols);
    var rc = parseInt(wh.rows) * parseInt(wh.cols);
    $("#canvaspages").html('');
    pageindex = 0;
    canvasindex = 0;
    canvasarray = [];
    for (var i = 0; i < (jsonCanvasArray.length - 1) / rc; i++) {
        pageindex = i;
        $("#canvaspages").append("<div class='page' id='page" + pageindex + "'></div>");
        addCanvasToPage(false, i, jsonCanvasArray);
    }
    setCanvasSize();

    for (var i = 0; i < canvasindex; i++) {
        (function(lcanvas, json) {
            lcanvas.clear();
            lcanvas.loadFromJSON(json, lcanvas.renderAll.bind(lcanvas), function(o, object) {

                object.selectable = false;

                lcanvas.deactivateAll();
                lcanvas.selection = false;
                saveState();

                lcanvas.renderAll();
                $("#spinnerModal").modal('hide');

            });

        })(canvasarray[i], jsonCanvasArray[i + 1]);
    }
}

$(".duplicatecanvas").click(function() {
    var id = this.id;
    id = id.replace("duplicatecanvas", "");
    addNewCanvasPage(true, id);
});

$('html').keyup(function(e) {

    if (e.target && e.target.nodeName == 'INPUT') return false;

    if (typeof canvas === "undefined") return;

    var activeobject = canvas.getActiveObject();
    if (!activeobject) activeobject = canvas.getActiveGroup();
    if (!activeobject) return;
    if (activeobject.isEditing) return
    switch (e.keyCode) {
        case 8:
            e.preventDefault();
            deleteItem();
            break;
        case 173:
        case 109: // -
            e.preventDefault();
            if (e.ctrlKey || e.metaKey) {
                return objManip('zoomBy-z', -10);
            }
            return true;
        case 61:
        case 107: // +
            if (e.ctrlKey || e.metaKey) {
                return demo.objManip('zoomBy-z', 10);
            }
            return true;
        case 37: // left
            if (e.shiftKey) {
                return objManip('zoomBy-x', -1);
                return false;
            }
            if (e.ctrlKey || e.metaKey) {
                return objManip('angle', -1);
            }
            return objManip('left', -1);
        case 39: // right
            if (e.shiftKey) {
                return objManip('zoomBy-x', 1);
                return false;
            }
            if (e.ctrlKey || e.metaKey) {
                return objManip('angle', 1);
            }
            return objManip('left', 1);
        case 38: // up
            if (e.shiftKey) {
                return objManip('zoomBy-y', -1);
            }
            if (!e.ctrlKey && !e.metaKey) {
                return objManip('top', -1);
            }
            return true;
        case 40: // down
            if (e.shiftKey) {
                return objManip('zoomBy-y', 1);
            }
            if (!e.ctrlKey && !e.metaKey) {
                return objManip('top', 1);
            }
            return true;
        case 46:
            e.preventDefault();
            deleteItem();
            break;
        case 38:
            e.preventDefault();
            activeobject.top = activeobject.top - 2;
            activeobject.setCoords();
            break;
        case 40:
            e.preventDefault();
            activeobject.top = activeobject.top + 2;
            activeobject.setCoords();
            break;
        case 37:
            e.preventDefault();
            activeobject.left = activeobject.left - 2;
            activeobject.setCoords();
            break;
        case 39:
            e.preventDefault();
            activeobject.left = activeobject.left + 2;
            activeobject.setCoords();
            break;
        default:
            break;
    }
    canvas.renderAll();
});

function loadTemplate(templateid) {
    $("#spinnerModal").modal('show');
    loadedtemplateid = templateid;
    canvas.clear();
    $.ajax({
        url: "loadtemplate.php",
        type: "get",
        data: {
            id: parseInt(templateid)
        },
        success: function(data) {
            console.log(data)
            if (data != "empty") {

                state = [];
                statearray = [];
                index = 0;
                indexarray = [];

                savestateaction = false;
                openTemplate(data)
                canvas.calcOffset();
                canvas.renderAll();

                savestateaction = true;
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            switch (jqXHR.status) {
                case 400:
                    var excp = $.parseJSON(jqXHR.responseText).error;
                    console.log("UnableToComplyException:" + excp.message, 'warning');
                    break;
                case 500:
                    var excp = $.parseJSON(jqXHR.responseText).error;
                    console.log("PanicException:" + excp.message, 'panic');
                    break;
                default:
                    console.log("HTTP status=" + jqXHR.status + "," + textStatus + "," + errorThrown + "," + jqXHR.responseText);
            }
        }
    });
}

fabric.Cropzoomimage = fabric.util.createClass(fabric.Image, {
    type: 'cropzoomimage',
    zoomedXY: false,
    initialize: function(element, options) {
        options || (options = {});
        this.callSuper('initialize', element, options);
        this.set({
            orgSrc: element.src,
            cx: 0, // clip-x
            cy: 0, // clip-y
            cw: element.width, // clip-width
            ch: element.height // clip-height
        });
    },
    zoomBy: function(x, y, z, callback) {
        if (x || y) {
            this.zoomedXY = true;
        }
        this.cx += x;
        this.cy += y;
        if (z) {
            this.cw -= z;
            this.ch -= z / (this.width / this.height);
        }
        if (z && !this.zoomedXY) {
            // Zoom to center of image initially
            this.cx = this.width / 2 - (this.cw / 2);
            this.cy = this.height / 2 - (this.ch / 2);
        }
        if (this.cw > this.width) {
            this.cw = this.width;
        }
        if (this.ch > this.height) {
            this.ch = this.height;
        }
        if (this.cw < 1) {
            this.cw = 1;
        }
        if (this.ch < 1) {
            this.ch = 1;
        }
        if (this.cx < 0) {
            this.cx = 0;
        }
        if (this.cy < 0) {
            this.cy = 0;
        }
        if (this.cx > this.width - this.cw) {
            this.cx = this.width - this.cw;
        }
        if (this.cy > this.height - this.ch) {
            this.cy = this.height - this.ch;
        }
        this.rerender(callback);
    },
    rerender: function(callback) {
        var img = new Image(),
            obj = this;
        img.onload = function() {
            var canvas = fabric.util.createCanvasElement();
            canvas.width = obj.width;
            canvas.height = obj.height;
            canvas.getContext('2d').drawImage(this, obj.cx, obj.cy, obj.cw, obj.ch, 0, 0, obj.width, obj.height);
            img.onload = function() {
                obj.setElement(this);
                obj.applyFilters(canvas.renderAll);
                obj.set({
                    left: obj.left,
                    top: obj.top,
                    angle: obj.angle
                });
                obj.setCoords();
                if (callback) {
                    callback(obj);
                }
            };
            img.src = canvas.toDataURL('image/png');
        };
        img.src = this.orgSrc;
    },
    toObject: function() {
        return fabric.util.object.extend(this.callSuper('toObject'), {
            orgSrc: this.orgSrc,
            cx: this.cx,
            cy: this.cy,
            cw: this.cw,
            ch: this.ch
        });
    }
});
fabric.Cropzoomimage.async = true;
fabric.Cropzoomimage.fromObject = function(object, callback) {
    fabric.util.loadImage(object.src, function(img) {
        fabric.Image.prototype._initFilters.call(object, object, function(filters) {
            object.filters = filters || [];
            var instance = new fabric.Cropzoomimage(img, object);
            if (callback) {
                callback(instance);
            }
        });
    }, null, object.crossOrigin);
};
zoomBy = function(x, y, z) {
    var activeObject = canvas.getActiveObject();
    if (activeObject) {
        activeObject.zoomBy(x, y, z, function() {
            canvas.renderAll()
        });
    }
};
objManip = function(prop, value) {
    var obj = canvas.getActiveObject();
    if (!obj) {
        return true;
    }
    switch (prop) {
        case 'zoomBy-x':
            obj.zoomBy(value, 0, 0, function() {
                canvas.renderAll()
            });
            break;
        case 'zoomBy-y':
            obj.zoomBy(0, value, 0, function() {
                canvas.renderAll()
            });
            break;
        case 'zoomBy-z':
            obj.zoomBy(0, 0, value, function() {
                canvas.renderAll()
            });
            break;
        default:
            if (obj.lockMovementX == false)
                obj.set(prop, obj.get(prop) + value);
            break;
    }
    if ('left' === prop || 'top' === prop) {
        obj.setCoords();
    }
    canvas.renderAll();
    return false;
};

function rgbToHex(r, g, b) {
    return "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1);
}

function onlyUnique(value, index, self) {
    return self.indexOf(value) === index;
}

function addinfotext() {
    var itext = new fabric.Text('', {
        fontFamily: selectedFont,
        fontSize: 8 * 2,
        fill: 'black',
        scaleX: canvasScale,
        scaleY: canvasScale,
        selectable: false,
        hasControls: false,
        hasBorders: false,
        hasCorners: false,
        opacity: 0
    });
    itext.setCoords();
    canvas.add(itext);
    canvas.renderAll();
}

function getinfotextobj(lcanvas) {
    if (lcanvas) canvas = lcanvas;
    if (typeof canvas === "undefined") return;
    var objs = canvas.getObjects();
    var infotextobj;
    for (var i in objs) {
        if (objs[i].type == 'text') {
            infotextobj = objs[i];
            infotextobj.selectable = false;
        }
    }
    return infotextobj;
}

function toSVG() {
    window.open(
        'data:image/svg+xml;utf8,' +
        encodeURIComponent(canvas.toSVG()));
}

function saveTemplateFile() {
    if (totalsvgs == convertedsvgs && loadedtemplateid != 0) {
        issavetemplate = false;
        var jsonCanvasArray = [];
        var width = document.getElementById("loadCanvasWid").value,
            height = document.getElementById("loadCanvasHei").value,
            rows = document.getElementById("numOfcanvasrows").value,
            cols = document.getElementById("numOfcanvascols").value;
        //inch to pixel
        width = width * 96;
        height = height * 96;
        var wh = '{\"width\": ' + width + ', \"height\": ' + height + ', \"rows\": ' + rows + ', \"cols\": ' + cols + '}';
        jsonCanvasArray.push(wh);
        var firstcanvas;
        for (var i = 0; i < canvasindex; i++) {
            if (!canvasarray[i]) continue;
            canvasarray[i].deactivateAll().renderAll();
            if ($("#divcanvas" + i).is(":visible")) {
                if (!firstcanvas || (firstcanvas.getObjects().length < canvasarray[i].getObjects().length)) firstcanvas = canvasarray[i];
                jsonCanvasArray.push(canvasarray[i].toDatalessJSON());
            }
        }
        var jsonData = JSON.stringify(jsonCanvasArray);
        var pngdataURL = firstcanvas.toDataURL("image/png");
        var path = "templates";
        $.ajax({
            type: 'POST',
            url: 'savetemplate.php',
            data: {
                pngimageData: pngdataURL,
                path: path,
                jsonData: jsonData,
                templateid: loadedtemplateid
            },
            success: function(msg) {
                getTemplates('', true);
                $('#spinnerModal').modal('hide');
            }
        })
    } else if(totalsvgs == convertedsvgs && loadedtemplateid == 0) {
        issavetemplate = false;
        issaveastemplate = true;
        $('#spinnerModal').modal('hide');
        $('#templateSaveModal').modal('hide');
        $('#savetemplate_modal').modal('show');
    }
}


function saveAsTemplateFile() {
    if (totalsvgs == convertedsvgs) {
        issaveastemplate = false;
        var jsonCanvasArray = [];
        var width = document.getElementById("loadCanvasWid").value,
            height = document.getElementById("loadCanvasHei").value,
            rows = document.getElementById("numOfcanvasrows").value,
            cols = document.getElementById("numOfcanvascols").value;
        //inch to pixel
        width = width * 96;
        height = height * 96;
        var wh = '{\"width\": ' + width + ', \"height\": ' + height + ', \"rows\": ' + rows + ', \"cols\": ' + cols + '}';
        jsonCanvasArray.push(wh);
        var firstcanvas;
        for (var i = 0; i < canvasindex; i++) {
            if (!canvasarray[i]) continue;
            canvasarray[i].deactivateAll().renderAll();
            if ($("#divcanvas" + i).is(":visible")) {
                if (!firstcanvas || (firstcanvas.getObjects().length < canvasarray[i].getObjects().length)) firstcanvas = canvasarray[i];
                jsonCanvasArray.push(canvasarray[i].toDatalessJSON());
            }
        }

        var jsonData = JSON.stringify(jsonCanvasArray);
        var pngdataURL = firstcanvas.toDataURL("image/png");
        var filename = $('#templatename').val();
        var categoryId = $('#template_category option:selected').val();
        var path = "templates";

        $.ajax({
            type: 'POST',
            url: 'saveastemplate.php',
            data: {
                pngimageData: pngdataURL,
                path: path,
                filename: filename,
                category: categoryId,
                jsonData: jsonData
            },
            success: function(templateid) {
                getTemplates('', true);
                $('#spinnerModal').modal('hide');
                loadedtemplateid = templateid;
            }
        })
    }
}
