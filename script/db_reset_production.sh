#!/bin/sh
mysql -uroot sankakukei -p -hmysql223.db.sakura.ne.jp sankakukei -e "drop table workshops;drop table applications"
mysql -uroot sankakukei -p -hmysql223.db.sakura.ne.jp sankakukei < db/schema.sql
mysql -uroot sankakukei -p -hmysql223.db.sakura.ne.jp sankakukei < db/data.sql
mysql -uroot sankakukei -p -hmysql223.db.sakura.ne.jp sankakukei -e "show tables;select * from workshops;select * from applications"
