#!/bin/sh
mysql -usankakukei -p -hmysql223.db.sakura.ne.jp --default-character-set=utf8 sankakukei -e "drop table workshops;drop table applications"
mysql -usankakukei -p -hmysql223.db.sakura.ne.jp --default-character-set=utf8 sankakukei < db/schema.sql
mysql -usankakukei -p -hmysql223.db.sakura.ne.jp --default-character-set=utf8 sankakukei < db/data.sql
mysql -usankakukei -p -hmysql223.db.sakura.ne.jp --default-character-set=utf8 sankakukei -e "show tables;select * from workshops;select * from applications"
