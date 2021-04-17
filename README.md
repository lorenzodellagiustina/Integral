## Hasa Matteo

## Della Giustina Lorenzo

## 17 aprile 2021

# Integrazioni di funzioni razionali fratte

## Integrali indefiniti

### Consideriamo l’integrale

### dove e sono dei polinomi a coefficienti reali.

### Per il calcolo degli integrali razionali fratti, qualsiasi sia il grado del numeratore rispetto

### al grado del denominatore ci si riconduce sempre ad una divisione di polinomi dove, il

### numeratore ha grado inferiore del denominatore. Infatti, supponiamo che, abbia grado

### maggiore o uguale di. Se consideriamo la divisione tra i polinomi : , il

### quoziente e il resto , allora:

### Dividendo tutto per avremo:

### Di conseguenza:

### Nell’addizione dei due integrali, il primo è calcolabile come integrale di un polinomio;

### il, invece, secondo è l’integrale di una funzione razionale fratta con numeratore di grado

### inferiore al grado del denominatore.

### Studiamo quindi integrali del tipo , con polinomio di grado inferiore a

### quello di.

#### ∫

```
N ( x )
D ( x )
```
```
dx
```
```
N ( x ) D ( x )
```
```
N ( x )
D ( x ) N ( x ) D ( x )
Q ( x ) R ( x )
```
```
N ( x )= Q ( x )∙ D ( x )+ R ( x )
```
```
D ( x )
```
```
N ( x )
D ( x )
= Q ( x )+
R ( x )
D ( x )
```
#### ∫

```
N ( x )
D ( x )
```
```
dx =∫ Q ( x )+
R ( x )
D ( x )
```
```
dx
```
#### ∫

```
R ( x )
D ( x )
dx R ( x )
D ( x )
```
### Dove e sono due

### polinomi e ha grado inferiore

### di

```
Q ( x ) R ( x )
R ( x )
D ( x )
```

### CASO 1: Il numeratore è la derivata del denominatore

### Esercizio 483 pag. 1917

### La derivata di f(x) è

### Noto che il numeratore è e quindi l’integrale può essere riscritto come

### Ora il numeratore è la derivata del denominatore e posso calcolare l’integrale

### Esercizio 487 pag. 1917

### Possiamo riscrivere questo integrale come

### Con la divisione del polinomio ci possiamo ricondurre alla forma

### Noto che , quindi posso risolvere l’integrale

#### ∫

### f ′ ( x )

```
f ( x )
```
```
dx =ln| f ( x )|+ c
```
#### ∫

```
3 x + 3
x^2 + 2 x + 9
```
```
dx
```
```
D [ f ( x )]= 2 x + 2
R ( x )= 3 ( x + 1 )
```
#### 3

#### 2 ∫

```
2 x + 2
x^2 + 2 x + 9
```
```
dx
```
#### 3

#### 2 ∫

```
2 x + 2
x^2 + 2 x + 9
dx =
```
#### 3

#### 2

```
ln( x^2 + 2 x + 9 )+ c
```
#### ∫

```
2 x^3 + x^2 + 1
x^2 + 1
dx
```
#### ∫

```
2 x^3
x^2 + 1
```
#### +

```
x^2 + 1
x^2 + 1
```
```
dx =∫ 1 +
2 x^3
x^2 + 1
```
```
dx
```
```
∫^1 +^2 x −
```
```
2 x
x^2 + 1
dx
```
```
2 x = D [ x^2 + 1 ]
```
```
F ( x )= x^2 + x −ln| x^2 + 1 |+ c
```

### CASO 2: Il denominatore è di primo grado

### Il grado di è 1

### Il grado di è minore del grado di Il grado di è 0

### Di conseguenza:

### CASO 3: IL DENOMINATORE È DI SECONDO GRADO

### Il grado di è 2

### Il grado di è minore del grado di Il grado di è minore o uguale a 1

### , con e non contemporaneamente nulli

### Consideriamo il discriminante, quindi:

### Possiamo distinguere 3 casi:

### A.

### B.

### C.

```
D ( x ) → D ( x )= ax + b , a ≠ 0
R ( x ) D ( x ) → R ( x ) → R ( x )= k
```
#### ∫

```
R ( x )
D ( x )
```
```
dx =∫
k
ax + b
```
```
dx
```
#### =

```
k
a ∫
```
```
a
ax + b
dx
```
#### =

```
k
a
ln| ax + b |+ c
```
```
D ( x ) → D ( x )= ax^2 + bx + c , a ≠ 0
```
```
R ( x ) D ( x ) → R ( x )
→ R ( x )= px + q p q
```
```
Δ= b^2 − 4 ac
```
#### Δ> 0

#### Δ= 0

#### Δ< 0


### CASO 3A:

### radici reali distinte di

### Allora, esistono tali che:

### Quindi:

### CASO 3B:

### ha due radici reali coincidenti

### Possiamo distinguere due casi:

- Se il grado di è 0, allora
- Se il grado di è 1, allora

#### Δ> 0

```
D ( x )= ax^2 + bx + c = a ( x − x 1 )( x − x 2 )
x 1 , x 2 D ( x )= 0
```
#### A , B ∈ℝ

```
R ( x )
D ( x )
```
#### =

#### A

```
a ( x − x 1 )
```
#### +

#### B

```
x − x 2
```
#### ∫

```
R ( x )
D ( x )
dx =∫
```
#### A

```
a ( x − x 1 )
dx +∫
```
#### B

```
x − x 2
dx
```
#### =

#### A

```
a ∫
```
```
a
a ( x − x 1 )
dx + B ∫
```
#### 1

```
x − x 2
dx
```
#### =

#### A

```
a
ln| x − x 1 |+ B ln| x − x 2 |+ c
```
#### Δ= 0

```
D ( x )= ax^2 + bx + c = a ( x − x 1 )^2
D ( x )= 0
```
```
R ( x ) R ( x )= q
```
#### ∫

```
R ( x )
D ( x )
```
```
dx =∫ q
a ( x − x 1 )^2
```
```
dx
```
#### =

```
q
a ∫
( x − x 1 )−^2 dx
```
#### =−

```
q
a
( x − x 1 )−^1 + c
```
```
R ( x ) R ( x )= px + q
```
#### ∫

```
R ( x )
D ( x )
dx =∫
```
#### A

```
a ( x − x 1 )
dx +∫
```
#### B

```
( x − x 1 )^2
dx
```

### CASO 3C:

### ha due radici complesse, quindi non esistono due polinomi di grado 1 il cui

### prodotto da

### Possiamo distinguere due casi:

- Se il grado di è 0, allora

### con

### Bisogna cercare di ricondurre questo integrale alla forma

- Se il grado di è 1, allora

### , con e

### Si cerca di operare sul numeratore per far comparire la derivata del numeratore e

### poi si scrive l’integrale come somma di due integrali:

#### =

#### A

```
a ∫
```
```
a
a ( x − x 1 )
dx + B ∫
```
#### 1

```
( x − x 1 )^2
dx
```
#### =

#### A

```
a
ln| x − x 1 |−
```
#### B

```
x − x 1
+ c
```
#### Δ< 0

```
D ( x )
D ( x )
```
```
R ( x ) R ( x )= q
```
#### ∫

```
R ( x )
D ( x )
```
```
dx =∫
q
ax^2 + bx + c
```
```
dx a ≠ 0
```
```
q ∫
```
### f ′ ( x )

```
[ f ( x )]^2 + 1
dx = qarctan ( f ( x ))+ c
```
```
R ( x ) R ( x )= px + q
```
#### ∫

```
R ( x )
D ( x )
dx =∫
px + q
ax^2 + bx + c
dx a ≠ 0 p ≠ 0
```
```
r ∫
2 ax + b
ax^2 + bx + c
```
```
dx + s ∫
```
#### 1

```
ax^2 + bx + c
```
```
dx
```

### Ora possiamo risolvere l’integrale con le tecniche che già abbiamo visto:

### CASO 4: IL DENOMINATORE È DI GRADO SUPERIORE AL SECONDO

### Quando il denominatore è di grado superiore al secondo, occorre, se è possibile,

### scomporlo in fattori e scrivere la frazione algebrica come somma di frazioni con denominatori

### di primo e secondo grado, riconducendosi così al calcolo di integrali dei tipi descritti in

### precedenza.

### Per trasformare la frazione algebrica iniziale nella somma di due o più frazioni si

### procede diversamente a seconda di come è scomposto il denominatore.

### Esempio 1

### Esempio 2

### Esempio 3

### Esempio 4

```
r ∫
2 ax + b
ax^2 + bx + c
dx + s ∫
```
#### 1

```
ax^2 + bx + c
dx = r ∫
```
### f ′ ( x )

```
f ( x )
dx + s ∫
g ( x )
```
### g ′( x )+ 1

```
dx
```
```
= r ln| ax^2 + bx + c |+ sarctan ( g ( x ))+ c
```
```
4 x
( x − 1 )( x + 1 )( x − 3 )
```
#### =

#### A

```
x − 1
```
#### +

#### B

```
x + 1
```
#### +

#### C

```
x − 3
```
```
2 x + 3
( x − 1 )( x + 2 )^2
```
#### =

#### A

```
x − 1
```
#### +

#### B

```
x + 2
```
#### +

#### C

```
( x + 2 )^2
```
```
6 x − 1
( x − 2 )^3
```
#### =

#### A

```
x − 2
```
#### +

#### B

```
( x − 2 )^2
```
#### +

#### C

```
( x − 2 )^3
```
```
x − 3
( x + 2 )( x^2 + 1 )
```
#### =

#### A

```
x + 2
```
#### +

```
Bx + C
x^2 + 1
```
