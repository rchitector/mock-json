# Examples

## Simple::one()

Code:

> Simple::one()->imageUrl();

Result: 

> https://via.placeholder.com/640x480.png/00ee99?text=excepturi

---

Code:

> Simple::one()->imageUrl(100, 150);

Result: 

> https://via.placeholder.com/100x150.png/007766?text=quis

---

Code:

> Simple::one()->imageUrl()->width(100)->height(150);

Result: 

> https://via.placeholder.com/100x150.png/006633?text=ut


## Simple::many()

Code:

> Simple::many()->imageUrl();

Result:

> []

---

Code:

> Simple::many(3)->imageUrl();

Result: 

> [<https://via.placeholder.com/640x480.png/0088bb?text=sequi>, <https://via.placeholder.com/640x480.png/007744?text=vel>, <https://via.placeholder.com/640x480.png/007733?text=qui>]

---

Code:

> Simple::many(3)->imageUrl(100, 150);

Result: 

> [<https://via.placeholder.com/100x150.png/003399?text=cum>,<https://via.placeholder.com/100x150.png/00cc88?text=nobis>,<https://via.placeholder.com/100x150.png/00eecc?text=quidem>]

---

Code:

> Simple::many(3)->imageUrl()->width(100)->height(150);

Result: 

> [<https://via.placeholder.com/100x150.png/003399?text=cum>,<https://via.placeholder.com/100x150.png/00cc88?text=nobis>,<https://via.placeholder.com/100x150.png/00eecc?text=quidem>]