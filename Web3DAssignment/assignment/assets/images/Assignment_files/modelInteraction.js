function cokeScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
	console.log(document.getElementById('SceneSwitch'))
}

function spriteScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
	console.log(document.getElementById('SceneSwitch'))
	
}

function fantaScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
	console.log(document.getElementById('SceneSwitch'))
}

function cokeCanScene(){
    nSwitch = 3;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', 3);
	console.log(document.getElementById('SceneSwitch').getAttribute('whichChoice'))
}

function pepperCanScene(){
    nSwitch = 4;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
	console.log(document.getElementById('SceneSwitch'))
}


var spinning = false

function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}


var spinning = false;
var spinningSprite = false;
var spinningCokeCan = false;
var spinningPepperCan = false;
var spinningFanta = false;

function spin()
{
	var scene = document.getElementById('SceneSwitch').getAttribute('whichChoice')
	
	if (scene == 0){
		spinning = !spinning;
		document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
		console.log(document.getElementById('model__RotationTimer'))
	} else if (scene == 1){
		spinningSprite = !spinningSprite;
		document.getElementById('model__RotationTimer_Sprite').setAttribute('enabled', spinningSprite.toString());
		console.log(document.getElementById('model__RotationTimer_Sprite'))
	} else if (scene == 2){
		spinningFanta = !spinningFanta;
		document.getElementById('model__RotationTimer_Fanta').setAttribute('enabled', spinningFanta.toString());
	} else if (scene == 2){
	}else if (scene == 3){
		spinningCokeCan = !spinningCokeCan;
		document.getElementById('model__RotationTimer_CokeCan').setAttribute('enabled', spinningCokeCan.toString());
	}
	else if (scene == 4){
		spinningPepperCan = !spinningPepperCan;
		document.getElementById('model__RotationTimer_PepperCan').setAttribute('enabled', spinningPepperCan.toString());
	}

}

function wireFrame()
{
	var e = document.getElementById('model');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}


var lightOn = true;

function directional()
{
	lightOn = !lightOn;
	document.getElementById('model__directional').setAttribute('on', lightOn);
}

var spotLight = false

function spot()
{
	spotLight = !spotLight;
	document.getElementById('model__spot').setAttribute('on', spotLight)
	
}

var pointLight = false

function point()
{
	pointLight = !pointLight;
	document.getElementById('model__point').setAttribute('on', pointLight);
}

function info(){
	var c = document.getElementById('SceneSwitch').getAttribute("whichchoice")

	$.getJSON('./model/modelDrinkDetails.php', function(jsonObj) {
		var i = parseInt(c)
		$('#m_t').html('<p>'+ jsonObj[i].modelTitle +'<p>')
		$('#m_p1').html('<p> Model Title: '+ jsonObj[i].x3dModelTitle +'<p>')
		$('#m_p2').html('<p> Model X3D Creation Method: '+ jsonObj[i].x3dCreationMethod +'<p>')
		$('#m_p3').html('<p> Model X3D Creation Method: '+ jsonObj[i].x3dCreationMethod +'<p>')
		$('#m_p3').html('<p> Model Brand: '+ jsonObj[i].brand +'<p>')
		 });
 

}

