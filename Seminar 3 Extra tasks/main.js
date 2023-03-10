// Функция selectBanners принимает массив баннеров (объектов как в примере) и
// число, обозначающее количество баннеров, которое нужно выбрать из массива.
// Необходимо реализовать функцию так, чтобы функция выбирала переданное количество
// случайных баннеров (баннеры уникальны, не должны повторяться в результате), 
// учитывая их вес (свойство weight в объектах баннеров). Чем больший вес имеет 
// баннер, тем больше шансов того что этот баннер должен быть выбран. 
// Если массив баннеров содержит меньше или столько же элементов, сколько было
// запрошено, то функция должна вернуть все элементы массива.

const banners = [
  { id: 2, weight: 10 },
  { id: 4, weight: 5 },
  { id: 8, weight: 15 },
  { id: 22, weight: 18 },
  { id: 41, weight: 41 },
  { id: 53, weight: 1 },
  { id: 69, weight: 9 },
];

console.log(selectBanners(banners, 3));

function selectBanners(banners, count) {
  let totalWeight = 0;
  let newList = [];
  for (const value of banners) {
    totalWeight += value.weight;
  }

  while (newList.length < count) {
    const randomNumber = Math.floor(Math.random() * totalWeight + 1);
    let temp = 0;
    for (const value of banners) {
      temp += value.weight;
      if (randomNumber < temp) {
        if (newList.includes(value)) {
          break;
        }
        newList.push(value);
        break;
      }
    }
  }

  return newList

}