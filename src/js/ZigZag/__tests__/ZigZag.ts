import { convert } from '../index';

describe('Problem zig zag test', () => {
  test('Test should pass and return output as PAHNAPLSIIGYIR', () => {
    expect(convert('PAYPALISHIRING', 3)).toStrictEqual('PAHNAPLSIIGYIR');
  });
  test('Test should pass and return output as PINALSIGYAHRPI', () => {
    expect(convert('PAYPALISHIRING', 4)).toStrictEqual('PINALSIGYAHRPI');
  });
  test('Test should pass and return output as AB', () => {
    expect(convert('AB', 1)).toStrictEqual('AB');
  });
});
