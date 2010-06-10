#!/bin/sh
mysql -usankakukei -p -hmysql223.db.sakura.ne.jp sankakukei -e "drop table workshops;drop table applications"
mysql -usankakukei -p -hmysql223.db.sakura.ne.jp sankakukei < db/schema.sql
mysql -usankakukei -p -hmysql223.db.sakura.ne.jp sankakukei < db/data.sql
mysql -usankakukei -p -hmysql223.db.sakura.ne.jp sankakukei -e "show tables;select * from workshops;select * from applications"
