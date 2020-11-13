#!/bin/bash

PROJECT_NAME=jpa-db
classes_dir=/opt/tomcat/apache-tomcat-9.0.39/webapps/jpa-db/WEB-INF/classes

cd lib

ls ../src  | grep  ".java" |  grep -v "mysql-connector-java-8.0.22.jar" > files_to_compile.tmp

while read line; do javac -cp  .:mysql-connector-java-8.0.22.jar:servlet-api.jar:  -d  $classes_dir  ../src/$line; done < files_to_compile.tmp

rm files_to_compile.tmp

