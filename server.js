var express = require('express'); //include the express js framework
var app = require('express')(); //create an app using express js
var server = require('http').createServer(app); //create an express js server

var io = require('socket.io').listen(server); //start socket io

var redisOpt = { redishost: '127.0.0.1', redisport: 6379 };
var redis = require("redis"); //include the redis client
var redisClient = redis.createClient(redisOpt.redisport, redisOpt.redishost ); //create a redis client



io.sockets.on('connection', function(socket){

	socket.on('register_user', function(data){
		redisClient.incr('user:ids', function(err, id){
			redisClient.hmset('users:' + id, data);
			redisClient.rpush('user_ids', id);
			console.log('User registered!');
		});
	});

	socket.on('get_ids', function(){
		redisClient.lrange('user_ids', 0, -1, function(err, reply){
			socket.emit('pass_id', reply);
		});
	});

	socket.on('get_user', function(data){
		redisClient.hgetall('users:'+ data, function(err, res) {
			socket.emit('user', res);
		});
	});



});

app.get('/testing', function(req, res){
	res.send('testing page created');
});

server.listen(8888);