#!/bin/sh

rsync -av --exclude '.git' . sankakukei@nitohen-sankakukei.com:/home/sankakukei/www/nitohen-sankakukei.com/
