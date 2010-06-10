#!/bin/sh
mysql -uroot nitohensankakukei -e "drop table workshops"
mysql -uroot nitohensankakukei -e "drop table applications"
mysql -uroot nitohensankakukei < db/schema.sql
mysql -uroot nitohensankakukei < db/data.sql
mysql -uroot nitohensankakukei -e "show tables"
mysql -uroot nitohensankakukei -e "select * from workshops"
mysql -uroot nitohensankakukei -e "select * from applications"
