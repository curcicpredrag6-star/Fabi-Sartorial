# SARTORIAL — proyecto web

## Incluido
- Sitio editorial responsive con cuatro carruseles (hero + tres colecciones), autoplay de 5 segundos, flechas, indicadores y swipe móvil.
- 12 fotografías locales en `assets/`.
- Tres líneas de producto y precios editables en `config.js`.
- Formulario de solicitud con medidas opcionales, corte masculino/femenino, iniciales y selección ilustrativa.
- Endpoint PHP que valida y guarda solicitudes en `data/orders.jsonl` (directorio protegido por `.htaccess`).
- Aviso básico de cookies; esta build no carga analítica ni publicidad.
- Páginas legales en modo BORRADOR, que requieren completar datos del vendedor y revisión.

## Precios
Editar `config.js`: `prices.ready`, `prices.mtm`, `prices.adapted`, `prices.illustration`.

## Publicación técnica
1. Hosting con PHP 8+ y HTTPS.
2. Subir el contenido completo al directorio web, manteniendo `api/` y `data/`.
3. Dar permisos de escritura al servidor únicamente en `data/` y confirmar que `data/orders.jsonl` no es accesible públicamente.
4. Probar un pedido de prueba y verificar que se almacena correctamente. Configurar backups y retención/borrado de datos.

## Límites importantes — no es todavía una tienda lista para cobrar
- El formulario crea solicitudes, no pedidos pagados. No se ha conectado Stripe: hacen falta cuenta activa, claves privadas guardadas solo en servidor, URLs definitivas, webhook firmado y pruebas de extremo a extremo.
- No hay panel de administración autenticado. No expongas `orders.jsonl` ni crees un panel sin autenticación fuerte, control de acceso y protección CSRF.
- Páginas legales son borradores. Sustituir todos los campos entre corchetes y obtener revisión legal/consumo/GDPR antes de vender.
- Las ilustraciones 01–06 son opciones de catálogo pendientes de cargar con los diseños reales; la selección añade +10 € de forma orientativa.
- Las entradas del Journal son contenido editorial de muestra, no hay CMS.
- Confirmar que tejidos, cortes, precios, plazos, fotos y características reales corresponden a los productos que se venderán.

## Seguridad y privacidad
El formulario solicita datos de contacto y medidas corporales. No solicitar diagnósticos ni fotos corporales. Las medidas siguen siendo datos personales: limitar acceso, conservar solo lo necesario, documentar base jurídica, plazos, proveedores/encargados, seguridad, derechos y procedimiento de brechas. Configurar un `SARTORIAL_IP_SALT` secreto en el entorno PHP; no usar el valor de ejemplo.
