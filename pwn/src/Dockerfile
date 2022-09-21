FROM ubuntu:18.04
ENV DEBIAN_FRONTEND=noninteractive

RUN sed -i 's/security.ubuntu.com/mirrors.tuna.tsinghua.edu.cn/g' /etc/apt/sources.list
RUN sed -i 's/archive.ubuntu.com/mirrors.tuna.tsinghua.edu.cn/g' /etc/apt/sources.list

RUN apt-get update 
RUN apt-get -y install wget python3-pip python3 procps curl gdb 
RUN pip3 config set global.index-url https://pypi.tuna.tsinghua.edu.cn/simple
RUN pip3 install --upgrade pip
RUN pip3 install pwntools
ENTRYPOINT [ "tail","-f","/dev/null" ]