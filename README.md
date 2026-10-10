# Website Portfolio - Do an DevOps
**Sinh vien thuc hien:** Hua Hien Luong
**Ma sinh vien:** DTC245180137
**Lop:** KTPM K23C

## 1. Gioi thieu
Day la he thong Website Portfolio ca nhan tich hop trang quan tri Admin, duoc dong goi hoan toan bang Docker. He thong bao gom Nginx lam Reverse Proxy, co so du lieu MySQL va tich hop day du cong cu giam sat (Prometheus, Grafana) cung he thong quan ly log tap trung (Loki, Promtail).

## 2. Yeu cau he thong
- May chu / May ao Linux (Ubuntu/Debian)
- Da cai dat Docker va Docker Compose

## 3. Huong dan khoi chay
Chay lenh sau tai thu muc chua file `docker-compose.yml` de khoi dong toan bo he thong o che do ngam (detached mode):
```bash
docker compose up -d

## 4. Danh sach cac dich vu va Cong truy cap
- Website Portfolio (Trang chu): http://localhost:8000
- Trang Quan tri (Admin): http://localhost:8000/admin.php
- Quan tri Co so du lieu (phpMyAdmin): http://localhost:8888
- He thong Giam sat & Log (Grafana): http://localhost:3000

## 5. Dung he thong
De dung va xoa cac container, go lenh:
    docker compose down
