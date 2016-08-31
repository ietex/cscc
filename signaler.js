#!/usr/bin/node

var namiConfig = {
    host: "127.0.0.1",
    port: 5038,
    username: "admin",
    secret: "123456"
};
const namiLib=require("nami");
var nami = new (namiLib.Nami)(namiConfig);
nami.open();
process.on('SIGINT', function () {
    nami.close();
    process.exit();
});
function standardSend(action) {
    nami.send(action, function (response) {
        console.log(' ---- Response: ' + util.inspect(response));
    });
}
/*

nami.on('namiEventDial', function (event) { });
nami.on('namiEventVarSet', function (event) { });
nami.on('namiEventHangup', function (event) { });

nami.on('namiConnected', function (event) {

    action = new namiLib.Actions.Command();
    action.command = "core show channels";
    standardSend(action);

});

*/



nami.on('namiEvent', function (event) {
    console.log('===event start===');
    console.log(event);
    console.log('===event end===');
});




var io = require('socket.io')(5080);

io.on('connection',function(socket)
{
    socket.emit('news',{hello:'world'});

    socket.on('callOut',function(data){
        var originate=new namiLib.Actions.Originate();
        originate.Channel='SIP/8000';
        originate.Context='remote_02';
        originate.Exten=data.phone;
        originate.Priority=1;
        originate.Callerid='<baochangxi>';
        originate.Timeout=30000;
        
        originate.variables={
            Channel: 'SIP/8001',
            Context: 'demo',
            Exten: '8001',
            Priority: 1,
            Callerid: '<baochangxi>',
            Timeout: 30000
        };

        standardSend(originate);

    });


});













