var app = require('express')()
var http = require('http').Server(app)
var io = require('socket.io')(http, {
    cors: {
        origin: '*'
    }
})
var Redis = require('ioredis')
var redis = new Redis(6379)

redis.subscribe('test', function(e){
    if (e) {
        console.log(e);
    }
})

redis.on('message', function(channel, message){
    console.log(channel);
    io.emit(channel, message)
})

http.listen(3000, function(){
    console.log('Listening on port 3000');
})