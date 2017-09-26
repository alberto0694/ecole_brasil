--- 
customlog: 
  - 
    format: combined
    target: /usr/local/apache/domlogs/cursosead.ecolebrasil.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /usr/local/apache/domlogs/cursosead.ecolebrasil.com-bytes_log
documentroot: /home/ecoleead/public_html
group: ecoleead
hascgi: 1
homedir: /home/ecoleead
ip: 50.116.87.84
owner: foxwe798
phpopenbasedirprotect: 1
port: 80
scriptalias: 
  - 
    path: /home/ecoleead/public_html/cgi-bin
    url: /cgi-bin/
  - 
    path: /home/ecoleead/public_html/cgi-bin/
    url: /cgi-bin/
serveradmin: webmaster@cursosead.ecolebrasil.com
serveralias: mail.cursosead.ecolebrasil.com www.cursosead.ecolebrasil.com
servername: cursosead.ecolebrasil.com
usecanonicalname: 'Off'
user: ecoleead
userdirprotect: ''
