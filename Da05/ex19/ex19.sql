SELECT DATEDIFF(MAX(`date`), MIN(`date`)) AS 'uptime'
FROM member_history;