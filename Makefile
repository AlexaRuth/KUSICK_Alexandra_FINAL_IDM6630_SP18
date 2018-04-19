.PHONY: start mysqldump stop

start:
	docker-compose up -d

mysqldump:
	docker exec KUSICK-Alex-DB bash -c "mysqldump -u wordpress -pwordpress --all-databases > /docker-entrypoint-initdb.d/mysql_dump.sql"

stop:
	docker exec KUSICK-Alex-DB bash -c "mysqldump -u wordpress -pwordpress --all-databases > /docker-entrypoint-initdb.d/mysql_dump.sql" && docker-compose down