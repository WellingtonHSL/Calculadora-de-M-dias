# Cálculadora de Médias

## Descrição

Este repositório contém um projeto simples em HTML e PHP que permite a entrada de quatro notas de alunos, calcula a média e imprime o conceito correspondente. O sistema também oferece feedback personalizado com base na média final e permite que alunos em recuperação tentem melhorar sua nota.

## Funcionalidades

1. **Entrada de Notas**: O usuário pode inserir quatro notas em um formulário.

2. **Cálculo da Média**: As notas são processadas para calcular a média.

3. **Conceito**: O conceito é atribuído com base na média:
   - A: média acima de 9
   - B: média acima de 7
   - C: média acima de 4
   - D: demais médias

4. **Mensagens de Feedback**:
   - Conceito A: “Aprovado com Louvor”
   - Conceito B: “Aluno Aprovado”
   - Conceito C: “Recuperação, sua chance de passar”
   - Conceito D: “Poxa vida, vamos tentar novamente ano que vem”

5. **Recuperação**: Para alunos com conceito C, um novo formulário permite a entrada da nota de recuperação. Se a média bimestral somada à nota de recuperação for igual ou superior a 10, o aluno é considerado aprovado.

## Tecnologias Utilizadas

- HTML
- PHP

## Como Usar

1. Clone este repositório para sua máquina local.
2. Abra o arquivo `index.php` em um servidor web que suporte PHP (por exemplo, XAMPP ou WAMP).
3. Preencha o formulário com as quatro notas e envie.
4. Siga as instruções com base no conceito exibido.

## Exemplo de Uso

1. Acesse o formulário.
2. Insira as notas: 9.5, 8.0, 7.5, 6.0.
3. O sistema calculará a média e exibirá o conceito correspondente.

## Contribuição

Sinta-se à vontade para contribuir com melhorias e sugestões. Para isso, faça um fork do repositório e envie suas alterações.