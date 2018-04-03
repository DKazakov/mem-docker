FROM golang
ADD . /app
RUN \
go get github.com/go-redis/redis && \
go build -o /bin/app /app/main.go && \
app && \
echo "OK"
