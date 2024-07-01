function updateTime() {
    // Obter a data e hora atual
    let now = new Date();

    // Formatar a data
    let date = now.toLocaleDateString('pt-BR', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });

    // Formatar o horário
    let time = now.toLocaleTimeString('pt-BR');

    // Atualizar o HTML com os valores formatados
    document.getElementById('clock').innerHTML = `${date}<br>${time}`;
}

// Chamar a função updateTime a cada segundo para manter o relógio atualizado
setInterval(updateTime, 1000);

// Chamar updateTime uma vez no início para evitar atrasos na exibição inicial
updateTime();
