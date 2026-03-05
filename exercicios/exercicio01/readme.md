# 📦 Programação Web II
## Exercício 01 – Classe `Product`

## 🧭 Contextualizando

Um e-commerce com milhares de itens ativos precisa de uma camada que descreva cada produto antes que ele seja enviado para o carrinho, vitrine ou ferramentas de relatório. A classe `Product` assume esse papel ao encapsular o identificador interno, o nome comercial e o preço base. Sempre que o time de marketing cria uma promoção ou o financeiro altera um valor, o objeto garante que os cálculos de desconto e a formatação de preço sigam um único padrão, evitando divergências entre os módulos da plataforma.

## 🎯 Objetivo

Implementar uma classe simples em PHP aplicando:

- Definição de classe
- Encapsulamento
- Getters e Setters

---

## 📝 Enunciado

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
