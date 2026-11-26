# PWII - Programação Web II (ETEC) - Gabriel Cleto

Repositório de exercícios, projetos e atividades desenvolvidos nas aulas de Programação Web II com o Professor André na ETEC.

---

## 📁 Estrutura do Repositório

* **`php_aulas/`**: Exercícios práticos e conceituais de PHP:
  * `1_Intro/`: Primeiros passos com PHP e phpinfo.
  * `2_Conceitos_basicos/`: Sintaxe, comentários, case sensitive e instruções.
  * `3_Tipos_de_dados/`: Inteiros, floats, strings, booleanos, arrays, arrays associativos, objetos e null.
  * `Aula4 _Variaveis/`: Declaração, variáveis de variáveis, referência, escopos local, global, estático e parâmetros.
  * `formulario_contato/`: Formulário de contato em PHP com sanitização e validação.
  * `cookies/`: Sistema completo de autenticação e login persistente com MySQL e Cookies.
* **`site/`**: Projeto do portal web institucional (HTML5, CSS3 responsivo, banners, imagens e JavaScript para menu).
* **`Projeto_Cadastro/`**: Sistema CRUD completo em PHP + MySQLi (Cadastro, Listagem, Edição e Exclusão de clientes).
* **`Formulario_contato/`**: Módulo individual do formulário de contato validado.

---

## 🚀 Como Executar Localmente (XAMPP)

1. Inicie o **Apache** e o **MySQL** através do Painel de Controle do XAMPP.
2. Copie ou crie um atalho da pasta `PWII-Gabriel-Cleto` (ou das subpastas `php_aulas`, `site`, `Projeto_Cadastro`) em:
   ```text
   C:\xampp\htdocs\
   ```
3. Para as aulas que utilizam banco de dados (`cookies/` e `Projeto_Cadastro/`):
   * Abra o navegador e acesse: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   * Importe os scripts SQL:
     * `php_aulas/cookies/cookies.sql`
     * `Projeto_Cadastro/banco_cadastro.sql`
4. Acesse as aplicações pelo navegador:
   * **Aulas de PHP**: [http://localhost/PWII-Gabriel-Cleto/php_aulas/](http://localhost/PWII-Gabriel-Cleto/php_aulas/)
   * **Sistema de Cookies & Login**: [http://localhost/PWII-Gabriel-Cleto/php_aulas/cookies/login.html](http://localhost/PWII-Gabriel-Cleto/php_aulas/cookies/login.html)
   * **Site Institucional**: [http://localhost/PWII-Gabriel-Cleto/site/](http://localhost/PWII-Gabriel-Cleto/site/)
   * **Projeto Cadastro (CRUD)**: [http://localhost/PWII-Gabriel-Cleto/Projeto_Cadastro/cadastro.html](http://localhost/PWII-Gabriel-Cleto/Projeto_Cadastro/cadastro.html)
