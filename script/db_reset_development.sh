#!/bin/sh
mysql -uroot sankakukei -e "drop table workshops"
mysql -uroot sankakukei -e "drop table applications"
mysql -uroot sankakukei < db/schema.sql
mysql -uroot sankakukei < db/data.sql
mysql -uroot sankakukei -e "show tables"
mysql -uroot sankakukei -e "select * from workshops"
mysql -uroot sankakukei -e "select * from applications"
