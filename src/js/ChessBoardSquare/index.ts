export const checkTwoChessboards = (coordinate1: string, coordinate2: string): boolean => {
  const alphaRows: { [key: string]: number } = {
    a: 1,
    b: 2,
    c: 3,
    d: 4,
    e: 5,
    f: 6,
    g: 7,
    h: 8,
  };
  const r1 = alphaRows[coordinate1[0]] + Number(coordinate1[1]);
  const r2 = alphaRows[coordinate2[0]] + Number(coordinate2[1]);
  return r1 % 2 == r2 % 2;
};
