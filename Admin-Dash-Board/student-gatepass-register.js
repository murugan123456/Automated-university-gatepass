const cameraFeed = document.getElementById("cameraFeed");

navigator.mediaDevices.getUserMedia({video:true}).then
(stream=>{
    cameraFeed.srcObject = stream;
})
.catch(error=>{
    alert("error accessing camera :",error)
})