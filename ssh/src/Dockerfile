FROM ubuntu:18.04
RUN sed -i 's/security.ubuntu.com/mirrors.ustc.edu.cn/g' /etc/apt/sources.list
RUN sed -i 's/archive.ubuntu.com/mirrors.ustc.edu.cn/g' /etc/apt/sources.list
COPY start.sh /start.sh
RUN apt-get update 
RUN apt-get install -y passwd openssl openssh-server netcat python3-pip
RUN pip3 install --upgrade pip
RUN pip3 config set global.index-url https://pypi.tuna.tsinghua.edu.cn/simple


RUN echo 'root:Y2ouU0rACN' | chpasswd
RUN echo "Port 22" >> /etc/ssh/sshd_config
RUN echo "PasswordAuthentication yes" >> /etc/ssh/sshd_config
RUN echo "PermitRootLogin yes" >> /etc/ssh/sshd_config
ENTRYPOINT [ "/bin/bash","/start.sh" ]