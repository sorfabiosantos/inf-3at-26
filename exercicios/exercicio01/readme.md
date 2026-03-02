# 📦 Programação Web II
## Exercício 01 – Classe `Product`

### 🎯 Objetivo

Implementar uma classe simples em PHP aplicando:

- Definição de classe
- Encapsulamento
- Getters e Setters

---

## 📝 Parte 1 – Versão Inicial

1. Crie a classe `Product` com os seguintes atributos:
    - `id` privado (int)
    - `name` privado (string)
    - `price` privado (float)

2. Crie um método chamado `discount` que recebe um valor percentual de desconto que deverá ser aplicado no preço do produto.

3. Crie um método chamado `show` para mostrar as informações do produto, nome e preço formatado em R$ 1.000,00.

4. Nesta primeira versão:
    - Instancie o objeto em `index.php`.
    - Atribua valores aos atributos utilizando o método construtor.
    - Atribua e altere valores dos atributos utilizando getters e setters
    - Exiba o nome e o preço usando `echo`.
