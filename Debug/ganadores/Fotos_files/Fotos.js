// Created by iWeb 2.0.4 local-build-20081009

function createMediaStream_id1()
{return IWCreatePhotocast("file://localhost/Volumes/medium/BOX/20%20an%CC%83os/CIERRE/final/GANADORES/ganadores/Fotos_files/rss.xml",false,true);}
function initializeMediaStream_id1()
{createMediaStream_id1().load('file://localhost/Volumes/medium/BOX/20%20an%CC%83os/CIERRE/final/GANADORES/ganadores',function(imageStream)
{var entryCount=imageStream.length;var headerView=widgets['widget0'];headerView.setPreferenceForKey(imageStream.length,'entryCount');NotificationCenter.postNotification(new IWNotification('SetPage','id1',{pageIndex:0}));});}
function layoutMediaGrid_id1(range)
{createMediaStream_id1().load('file://localhost/Volumes/medium/BOX/20%20an%CC%83os/CIERRE/final/GANADORES/ganadores',function(imageStream)
{if(range==null)
{range=new IWRange(0,imageStream.length);}
IWLayoutPhotoGrid('id1',new IWPhotoGridLayout(3,new IWSize(163,163),new IWSize(163,14),new IWSize(233,192),27,27,0,new IWSize(-2,16)),new IWPhotoFrame([IWCreateImage('Fotos_files/GraphPaper_01.png'),IWCreateImage('Fotos_files/GraphPaper_02.png'),IWCreateImage('Fotos_files/GraphPaper_01.png'),IWCreateImage('Fotos_files/GraphPaper_01.png'),IWCreateImage('Fotos_files/GraphPaper_09.png'),IWCreateImage('Fotos_files/GraphPaper_08.png'),IWCreateImage('Fotos_files/GraphPaper_07.png'),IWCreateImage('Fotos_files/GraphPaper_01.png')],null,0,0.600000,90.000000,0.000000,90.000000,0.000000,89.000000,11.000000,89.000000,7.000000,11.000000,11.000000,11.000000,11.000000,'Fotos_files/graphpaper_tape.png',new IWPoint(0.500000,0),new IWSize(155,47),0.300000),imageStream,range,null,null,1.000000,{backgroundColor:'#000000',reflectionHeight:100,reflectionOffset:2,captionHeight:0,fullScreen:1,transitionIndex:2},'Media/slideshow.html','widget0','widget1','widget2')});}
function relayoutMediaGrid_id1(notification)
{var userInfo=notification.userInfo();var range=userInfo['range'];layoutMediaGrid_id1(range);}
function onStubPage()
{var args=getArgs();parent.IWMediaStreamPhotoPageSetMediaStream(createMediaStream_id1(),args.id);}
if(window.stubPage)
{onStubPage();}
setTransparentGifURL('Media/transparent.gif');function applyEffects()
{var registry=IWCreateEffectRegistry();registry.registerEffects({stroke_0:new IWStrokeParts([{rect:new IWRect(-5,5,10,191),url:'Fotos_files/stroke.png'},{rect:new IWRect(-5,-5,10,10),url:'Fotos_files/stroke_1.png'},{rect:new IWRect(5,-5,704,10),url:'Fotos_files/stroke_2.png'},{rect:new IWRect(709,-5,10,10),url:'Fotos_files/stroke_3.png'},{rect:new IWRect(709,5,10,191),url:'Fotos_files/stroke_4.png'},{rect:new IWRect(709,196,10,11),url:'Fotos_files/stroke_5.png'},{rect:new IWRect(5,196,704,11),url:'Fotos_files/stroke_6.png'},{rect:new IWRect(-5,196,10,11),url:'Fotos_files/stroke_7.png'}],new IWSize(714,202))});registry.applyEffects();}
function hostedOnDM()
{return false;}
function onPageLoad()
{IWRegisterNamedImage('comment overlay','Media/Photo-Overlay-Comment.png')
IWRegisterNamedImage('movie overlay','Media/Photo-Overlay-Movie.png')
IWRegisterNamedImage('contribution overlay','Media/Photo-Overlay-Contribution.png')
loadMozillaCSS('Fotos_files/FotosMoz.css')
NotificationCenter.addObserver(null,relayoutMediaGrid_id1,'RangeChanged','id1')
adjustLineHeightIfTooBig('id2');adjustFontSizeIfTooBig('id2');Widget.onload();applyEffects()
initializeMediaStream_id1()}
function onPageUnload()
{Widget.onunload();}
