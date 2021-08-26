FROM ubi7:latest
MAINTAINER Sanjay Singh <sanjay.kr.singh@gmail.com>
LABEL version="1.0" \
      description="Custom Apache with PHP and PDO container based on UBI 7" \
      createDate="2020-09-28"
RUN yum -y install https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm && \
    yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm && \
    yum-config-manager --enable remi-php72 && \
    yum -y install httpd php php-common php-mysql  &&  \
    yum clean all
RUN echo "Apache TEST page" > /var/www/html/index.html
EXPOSE 80
ENTRYPOINT ["httpd","-D","FOREGROUND"]
