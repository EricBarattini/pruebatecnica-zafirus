# pruebatecnica-zafirus
Prueba tecnica 


# pruebatecnica-zafirus

Prueba técnica Laravel Senior

---

## 2. Análisis de Código Laravel

```php
collect([1, 2, 3, 4])
    ->map(fn($n) => $n * 2)
    ->filter(fn($n) => $n > 5)
    ->values()
    ->all();
```
 El resultado es [6,8], primero se crea una coleccion con (1,2,3,4),
 luego se multiplica por 2 cada elemento mediante map(),
 se le aplica filter() para filtrar los elementos mayores a 5, 
 por ultimo values() reasigna indices desde 0 y all() devuelve un array con los datos filtrados

---

## 3. Optimización de Rendimiento en Laravel (Base de datos)

1. Optimización de queries  
2. Índices en BD  
3. LiveSearch mediante AJAX  
4. Cache de Consultas  
5. Carga diferida


