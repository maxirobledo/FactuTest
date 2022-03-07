# FactuTest

FactuTest es una app web de en lenguaje PHP que simula la compra de articulos y emisión de una factura.

## Installación

1. Creación y publicación de la imagen php en docker hub
``` bash
docker login

docker build --no-cache -t maxirobledo/factutest:v1 .

docker push maxirobledo/factutest:v1
```

2. Recrear orquestación de kubernetes: (tanto para la carpte db como en la carpeta app)
```bash
kubectl -n testing apply -f ./
```

3. Verificar estado del cluster de kubernetes (nodo, pods, services)
```bash
kubectl -n testing get nodes -o wide
kubectl -n testing get pods -o wide
kubectl -n testing get svc -o wide
```

4. Ingresar al pod de postgres y verificar BD
```bash
kubectl -n testing exec -i -t pod_name -- /bin/bash
psql -U postgres db
```

5. Crear conexión PGAdmin Postgres
```
Nombre de la conexion: Postgres (puede ser cualquiera)
IP: 10.244.0.211
Port: 5432
BD: db
User: postgres
Password: postgres
```

6. Eliminar la orquestación de kubernetes:
```
kubectl -n testing delete -f ./
```
## Autor
Maximiliano Robledo
