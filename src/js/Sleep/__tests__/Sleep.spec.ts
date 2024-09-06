import { sleep } from '../index';
import { sleep as sleep2 } from '../index2';

describe('Problem sleep test', () => {
  test('Test should pass', () => {
    expect(sleep(200));
    expect(sleep2(200));
  });
});
