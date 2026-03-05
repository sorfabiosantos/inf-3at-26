# 📦 Programação Web II
## Exercício 02 – Classe `Order`

## 🧭 Contextualizando

No módulo de vendas de uma plataforma omnichannel, cada pedido passa por checkout, antifraude, expedição e faturamento. A classe `Order` funciona como o contrato único entre esses setores: ela guarda o identificador interno, o nome do cliente e o total calculado, permitindo que taxas logísticas e ajustes financeiros sejam aplicados de maneira controlada por meio de métodos específicos. Dessa forma, qualquer sistema que consome o pedido tem a garantia de que os dados exibidos refletem exatamente o que será cobrado e enviado ao consumidor.

## 🎯 Objetivo

Praticar novamente a criação de classes em PHP consolidando:

- Definição de classe e atributos privados
- Encapsulamento com getters e setters
- Uso do método construtor para inicializar valores
- Perfis simples de negócio (aplicar taxas) com métodos próprios

---

## 📝 Enunciado

1. Crie a classe `Order` com os seguintes atributos privados:
    - `id` (int)
    - `customerName` (string)
    - `total` (float)

2. Implemente um método chamado `addFee` que receba um valor percentual de acréscimo (ex.: 5 para 5%) e some esse valor ao total do pedido.

3. Implemente um método chamado `show` para retornar as informações formatadas do pedido (`Pedido: #id - Cliente: Nome - Total: R$ 1.000,00`).

4. No arquivo `index.php`:
    - Instancie o objeto utilizando o construtor, definindo os três atributos.
    - Utilize os getters e setters para consultar e atualizar `customerName` e `total` após a criação.
    - Aplique pelo menos uma chamada ao método `addFee`.
    - Exiba o resultado chamando `show()` e imprimindo com `echo`.

5. Garanta que o código continue legível e organizado, mantendo o mesmo nível de dificuldade do Exercício 01.

> Experimente alterar os valores e percentuais para observar os diferentes resultados do método `show`.
