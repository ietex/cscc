/**
 * Created by Administrator on 2016/8/26.
 */

var Tel = function () {

    var socket = io('http://192.168.8.3:5080');
    socket.on('news', function (data) {
        console.log(data);
        socket.emit('my other event', { my: 'data' });
    });

    function telClass(){
        this.isCalling=false;
        this.status=1;

        this.callOut=function(phoneNum){
            socket.emit('callOut', { phone:phoneNum });
        }
    }

    var telObj=new telClass();


    return {
        callOut: telObj.callOut,
        isCalling: telObj.isCalling,

    };
}();


/**
 * End
 */