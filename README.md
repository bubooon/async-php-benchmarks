**Install**
```
cd docker
docker-compose up
```

**Urls:**  
`http://localhost:8080/` - nginx + php-fpm
`http://localhost:8000/` - swoole  
`http://localhost:7000/` - nodejs  
`http://localhost:5000/` - go 

**Install tool for benchmarks**   
for example wrk:
[https://github.com/wg/wrk/wiki/Installing-Wrk-on-Linux](https://github.com/wg/wrk/wiki/Installing-Wrk-on-Linux)

**Run benchmarks**   
```
wrk -t4 -c400 -d10s http://localhost:port
```
