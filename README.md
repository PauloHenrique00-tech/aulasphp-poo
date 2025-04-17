# Exemplos de programação orientada a objetos usando PHP
<<<<<<< Updated upstream
=======

## 04_heranca-e-enumeracoes

- Superclasse e subclasse
- Readequação de propriedades
- Ajustes nas chamadas de construtor, usando `parent` para acessar construtor da superclasse


## 03_encapsulamento-e-metodo-construtor

- Implementação do método construtor obrigando a inicialização do objeto com dados provenientes de parâmetros
- Chamada dos setters a partir do construtor
- Mudança de visibilidade dos setters para privado


## 02_encapsulamento-para-visibilidade

- Utilização de diferentes visibilidades (private e public)
- Controle da forma como os dados são acessados (getters) e modificados (setters)
- Com esta abordagem, podemos esconder detalhes de implementação da classe
- Podemos atribuir diferentes lógicas de negócio (validações, sanitizações etc)


## 01_abstracao-usando-classes-atributos-metodos

- Pasta `src` para organização das classes
- Criação da classe `Cliente.php` *(sempre iniciando com letra maiúscula)*
    - Definição de atributos contendo:
        - tipo de visibilidade (nos exemplos, usamos `public`)
        - tipo de dados
        - nome do atributo
    - Definição de métodos contendo:
        - tipo de visibilidade (nos exemplos, usamos `public`)
        - nome do método
        - detalhes adicionais (parâmetros, tipo de retorno etc)
        - Uso do `$this` para acessar os recursos da classe
- Na `index.php`:
    - Uso do `require` para referenciar a classe `Cliente`
    - Criação dos objetos `$clienteA` e `$clienteB` a partir da classe usando `new Cliente()`
    - Atribuição de dados de forma direta aos atributos usando `$nomeObjeto->atributo = valor`
    - Chamada de métodos através do objeto usando `$nomeObjeto->metodo()`
>>>>>>> Stashed changes
