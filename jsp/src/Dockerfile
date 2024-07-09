# 使用官方的 Tomcat 镜像作为基础镜像
FROM tomcat:8.0.22-jre8

# 设置环境变量
ENV CATALINA_HOME /usr/local/tomcat

# 将本地的 JSP 文件复制到 Tomcat 的 webapps 目录下
COPY webapps/ /usr/local/tomcat/webapps/

# 暴露 Tomcat 默认端口
EXPOSE 8080

# 启动 Tomcat 服务器
CMD ["catalina.sh", "run"]
