const http = require('http');
const crypto = require('crypto');

const requestHandler = (request, response) => {
	const rand = Math.random() * (10000 - 10) + 10;
	for(let i = 0; i < rand; i++){
		crypto.createHash('sha256').update(''+rand+i+rand).digest('base64');
	}
	response.end('Hello World!');
};
const server = http.createServer(requestHandler);
server.listen(7000);
