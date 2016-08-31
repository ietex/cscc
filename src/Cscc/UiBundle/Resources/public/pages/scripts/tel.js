/**
 * Created by Administrator on 2016/8/26.
 */

var Tel = function () {

    function telClass(){
        this.isCalling=false;
        this.status=1;

        this.callOut=function(phoneNum){

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